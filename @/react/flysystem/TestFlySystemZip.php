<?php
require __DIR__ .'/vendor/autoload.php';

use League\Flysystem\Filesystem;
use League\Flysystem\Sftp\SftpAdapter;
use League\Flysystem\ZipArchive\ZipArchiveAdapter as Adapter;
use League\Flysystem\ZipArchive\ZipArchiveAdapter as Zip;
use League\Flysystem\Config;

class TestFlySystemZip
{
    public function zipProvider()
    {   //Create a files directory in the current file

        if (! is_dir($folder = __DIR__.'/files')) {
            mkdir($folder, 0777);
        }

        //Removes a zip file from the Files folder

        if (is_file($location = __DIR__.'/files/tester.zip')) {
            unlink($location);

        }

        return [
            [new Zip($location, new ZipArchive())],
        ];
    }
    //do not work
    public function testInstance()
    {
        $adapter = new Zip(__DIR__.'/files/tester.zip', new ZipArchive());
        $this->assertInstanceOf('League\Flysystem\AdapterInterface', $adapter);
    }
    //do not work
    public function testGetArchive(Zip $zip)
    {
        $this->assertInstanceOf('ZipArchive', $zip->getArchive());
    }
    //do not work
    public function testZip(Zip $zip)
    {
        $this->assertCount(0, $zip->listContents());
        $this->assertInternalType('array', $zip->write('file.txt', 'contents', new Config()));
        $this->assertCount(1, $zip->listContents());
        $this->assertInternalType('array', $zip->write('nested/file.txt', 'contents', new Config()));
        $this->assertCount(3, $zip->listContents());
        $zip->setPathPrefix('nested/');
        $this->assertCount(1, $zip->listContents());
        $zip->setPathPrefix('');
        $result = $zip->read('nested/file.txt');
        $this->assertEquals('contents', $result['contents']);
        $zip->update('nested/file.txt', 'new contents', new Config());
        $result = $zip->read('nested/file.txt');
        $this->assertEquals('new contents', $result['contents']);
        $result = $zip->readStream('nested/file.txt');
        $this->assertArrayHasKey('stream', $result);
        $result = $zip->getSize('nested/file.txt');
        $this->assertEquals(12, $result['size']);
        $result = $zip->getTimestamp('nested/file.txt');
        $this->assertInternalType('integer', $result['timestamp']);
        $result = $zip->getMimetype('nested/file.txt');
        $this->assertEquals('text/plain', $result['mimetype']);
        $zip->deleteDir('nested');
        $this->assertCount(1, $zip->listContents());
        $zip->rename('file.txt', 'renamed.txt');
        $this->assertFalse($zip->has('file.txt'));

        $zip->createDir('empty_dir', new Config());
        $this->assertInternalType('array', $zip->getMetadata('empty_dir'));

        $stream = tmpfile();
        fwrite($stream, 'something');
        rewind($stream);
        $zip->writeStream('streamed.txt', $stream, new Config());
        fclose($stream);
        $this->assertInternalType('array', $zip->has('streamed.txt'));

        $stream = tmpfile();
        fwrite($stream, 'something');
        rewind($stream);
        $zip->updateStream('streamed-other.txt', $stream, new Config());
        fclose($stream);
        $this->assertInternalType('array', $zip->has('streamed-other.txt'));
    }
    //do not work
    public function testWriteStreamFail(Zip $zip)
    {
        $zip->writeStream('file.txt', tmpfile(), new Config(['visibility' => 'private']));
    }
    //do not work
    public function testGetVisibility($zip)
    {
        $zip->getVisibility('path');
    }
    //do not work
    public function testZipOpenFails()
    {
        if (defined('HHVM_VERSION')) {
            $this->markTestSkipped('This test results in a fatal error on HHVM');
        }

        $mock = Mockery::mock('ZipArchive');
        $mock->shouldReceive('open')->andReturn(false);
        $zip = new Zip('location', $mock);
    }

    public function testZipReadWriteFails()
    {
        if (defined('HHVM_VERSION')) {
            $this->markTestSkipped('HHVM does not support mocking of ZipArchive');
        }

        $mock = Mockery::mock('ZipArchive');
        $mock->shouldReceive('open')->andReturn(true);
        $mock->shouldReceive('close')->andReturn(true);
        $mock->shouldReceive('addFromString')->andReturn(false);
        $mock->shouldReceive('getFromName')->andReturn(false);
        $mock->shouldReceive('getStream')->andReturn(false);
        $zip = new Zip('location', $mock);

        $this->assertFalse($zip->write('file', 'contents', new Config()));
        $this->assertFalse($zip->read('file'));
        $this->assertFalse($zip->getMimetype('file'));
        $this->assertFalse($zip->readStream('file'));
    }

    public function testCopy()
    {
        if (defined('HHVM_VERSION')) {
            $this->markTestSkipped('This test results in a fatal error on HHVM');
        }

        $resource = fopen(__DIR__.'/../readme.md', 'r+');
        $mock = Mockery::mock('ZipArchive');
        $mock->shouldReceive('open')->andReturn(true);
        $mock->shouldReceive('close')->andReturn(true);
        $mock->shouldReceive('addFromString')->andReturn(true);
        $mock->shouldReceive('getStream')->andReturn($resource);
        $zip = new Zip('location', $mock);
        $this->assertTrue($zip->copy('old', 'new'));

        // Ensure the resource is closed internally
        $this->assertFalse(is_resource($resource));
    }

    public function testCopyFailed()
    {
        if (defined('HHVM_VERSION')) {
            $this->markTestSkipped('This test results in a fatal error on HHVM');
        }

        $mock = Mockery::mock('ZipArchive');
        $mock->shouldReceive('open')->andReturn(true);
        $mock->shouldReceive('close')->andReturn(true);
        $mock->shouldReceive('getStream')->andReturn(false);
        $zip = new Zip('location', $mock);
        $this->assertFalse($zip->copy('old', 'new'));
    }


}