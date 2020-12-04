const fs = require('fs');
const gulp = require('gulp');
const eslint = require('gulp-eslint');
const karma = require('karma');
const size = require('gulp-size');
const rimraf = require('rimraf');
const dotenv = require('dotenv');
const exec = require('child_process').exec;

const pkg = require('./package.json');
const karmaDefaults = require('./karma.defaults.js');

function hasArg(arg) {
  const args = JSON.parse(process.env.npm_config_argv).original;
  return args.indexOf(arg) > -1;
}

if (fs.existsSync('./.env')) dotenv.config();

gulp.task('lint', () => {
  return gulp
    .src('./src/**/*.js')
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(eslint.failAfterError());
});

gulp.task('size', () => {
  const mainPath = './' + pkg.main;
  const minifiedPath = mainPath.replace('.js', '.min.js');

  return gulp
    .src([mainPath, minifiedPath])
    .pipe(
      size({
        showFiles: true,
        showTotal: false
      })
    )
    .pipe(
      size({
        showFiles: true,
        showTotal: false,
        title: 'gzipped',
        gzip: true
      })
    );
});

gulp.task('clean', cb => {
  rimraf('./*.log', cb);
});

gulp.task('test-local', done => {
  // Setup browsers.
  const browsers = [];
  hasArg('--chrome') && browsers.push('Chrome');
  hasArg('--firefox') && browsers.push('Firefox');
  hasArg('--safari') && browsers.push('Safari');
  hasArg('--edge') && browsers.push('Edge');
  if (!browsers.length) browsers.push('Chrome');

  new karma.Server(
    {
      configFile: __dirname + '/karma.conf.js',
      action: 'run',
      browsers
    },
    exitCode => {
      done(exitCode);
    }
  ).start();
});

gulp.task('test-local-min', done => {
  // Setup browsers.
  const browsers = [];
  hasArg('--chrome') && browsers.push('Chrome');
  hasArg('--firefox') && browsers.push('Firefox');
  hasArg('--safari') && browsers.push('Safari');
  hasArg('--edge') && browsers.push('Edge');
  if (!browsers.length) browsers.push('Chrome');

  // Replace main file with minified version.
  const mainPath = './' + pkg.main;
  const minifiedPath = mainPath.replace('.js', '.min.js');
  const files = karmaDefaults.files.map(path => {
    if (path === mainPath) return minifiedPath;
    return path;
  });

  new karma.Server(
    {
      configFile: __dirname + '/karma.conf.js',
      action: 'run',
      browsers,
      files
    },
    exitCode => {
      done(exitCode);
    }
  ).start();
});

gulp.task('test-sauce', done => {
  // Setup browsers.
  const browsers = [];
  hasArg('--chrome') && browsers.push('slChrome');
  hasArg('--firefox') && browsers.push('slFirefox');
  hasArg('--safari') && browsers.push('slSafari');
  hasArg('--edge') && browsers.push('slEdge');
  if (!browsers.length) browsers.push('slChrome', 'slFirefox', 'slSafari');

  new karma.Server(
    {
      configFile: __dirname + '/karma.conf.js',
      action: 'run',
      browsers
    },
    exitCode => {
      done(exitCode);
    }
  ).start();
});

gulp.task('test-sauce-min', done => {
  // Setup browsers.
  const browsers = [];
  hasArg('--chrome') && browsers.push('slChrome');
  hasArg('--firefox') && browsers.push('slFirefox');
  hasArg('--safari') && browsers.push('slSafari');
  hasArg('--edge') && browsers.push('slEdge');
  if (!browsers.length) browsers.push('slChrome', 'slFirefox', 'slSafari');

  // Replace main file with minified version.
  const mainPath = './' + pkg.main;
  const minifiedPath = mainPath.replace('.js', '.min.js');
  const files = karmaDefaults.files.map(path => {
    if (path === mainPath) return minifiedPath;
    return path;
  });

  new karma.Server(
    {
      configFile: __dirname + '/karma.conf.js',
      action: 'run',
      browsers,
      files
    },
    exitCode => {
      done(exitCode);
    }
  ).start();
});

gulp.task('validate-formatting', cb => {
  exec('npm run validate-formatting', (err, stdout, stderr) => {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});

gulp.task('bundle', cb => {
  exec('npm run bundle', (err, stdout, stderr) => {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});

gulp.task('minify', cb => {
  exec('npm run minify', (err, stdout, stderr) => {
    console.log(stdout);
    console.log(stderr);
    cb(err);
  });
});

gulp.task(
  'build',
  gulp.series('bundle', 'minify', done => {
    done();
  })
);

gulp.task(
  'pre-commit',
  gulp.series('lint', 'validate-formatting', done => {
    done();
  })
);

gulp.task(
  'test',
  gulp.series('lint', 'validate-formatting', 'test-sauce', 'test-sauce-min', 'clean', done => {
    done();
  })
);
