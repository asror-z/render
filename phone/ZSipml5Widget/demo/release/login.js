var call_config = {
    realm: '10.10.3.41:5160',
    impi: '222',
    impu: 'sip:222@10.10.3.41:5160',
    password: '222',
    display_name: '41_222',
    websocket_proxy_url: 'wss://10.10.3.41:8089/ws',
    outbound_proxy_url: null,
    ice_servers: null,
    enable_rtcweb_breaker: false,
    events_listener: { events: '*', listener: onSipEventStack },
    enable_early_ims: true , // Must be true unless you're using a real IMS network
    enable_media_stream_cache: false,
    bandwidth: null, // could be redefined a session-level
    video_size: null, // could be redefined a session-level
    sip_headers: [
        { name: 'User-Agent', value: 'IM-client/OMA1.0 sipML5-v1.2016.03.04' },
        { name: 'Organization', value: 'Doubango Telecom' }
    ]
};