var _0x3a61 = [
    'confirmed',
    'getElementById',
    'parse',
    'length',
    'totalConfirmed_Nepal',
    'total_cases',
    'split',
    'GET',
    'Counter',
    'https://coronavirus-monitor.p.rapidapi.com/coronavirus/latest_stat_by_country.php?country=Nepal',
    'toString',
    'json',
    'each',
    'totalConfirmedGlobal',
    'text',
    'totalDeaths_Nepal',
    '.count-people',
    'innerHTML',
    'animate',
    'ff193c05dcmsh647f7bdad4c7cb7p1be2c3jsn1d6197c0b8b7',
    'done',
    'latest_stat_by_country',
    'total_recovered',
    'prop',
    'total_deaths',
    'totalRecovered_Nepal',
    'coronavirus-monitor.p.rapidapi.com',
    'ajax'
];
(function(_0x12afc2, _0x3a6188) {
    var _0x3f0d3d = function(_0x6279a1) {
        while (--_0x6279a1) {
            _0x12afc2['push'](_0x12afc2['shift']());
        }
    };
    _0x3f0d3d(++_0x3a6188);
})(_0x3a61, 0xb2);
var _0x3f0d = function(_0x12afc2, _0x3a6188) {
    _0x12afc2 = _0x12afc2 - 0x0;
    var _0x3f0d3d = _0x3a61[_0x12afc2];
    return _0x3f0d3d;
};
var settings = {
    async: !![],
    crossDomain: !![],
    url: _0x3f0d('0x1b'),
    method: _0x3f0d('0x19'),
    headers: { 'x-rapidapi-host': _0x3f0d('0x10'), 'x-rapidapi-key': _0x3f0d('0x9') }
};
$['ajax'](settings)[_0x3f0d('0xa')](function(_0x4e06b6) {
    var _0x9b1999 = JSON[_0x3f0d('0x14')](_0x4e06b6);
    var _0x40f1d9 = _0x9b1999[_0x3f0d('0xb')][0x0];
    var _0x2ac022 = _0x40f1d9[_0x3f0d('0x17')];
    var _0x37313f = _0x40f1d9[_0x3f0d('0xe')];
    var _0x44923f = _0x40f1d9[_0x3f0d('0xc')];
    if (_0x37313f == '') {
        _0x37313f = '0';
    }
    document[_0x3f0d('0x13')](_0x3f0d('0x16'))['innerHTML'] = _0x2ac022[_0x3f0d('0x0')]();
    document[_0x3f0d('0x13')](_0x3f0d('0xf'))[_0x3f0d('0x7')] = _0x44923f['toString']();
    document[_0x3f0d('0x13')](_0x3f0d('0x5'))[_0x3f0d('0x7')] = _0x37313f[_0x3f0d('0x0')]();
});
$[_0x3f0d('0x11')]({
    url: 'https://wuhan-coronavirus-api.laeyoung.endpoint.ainize.ai/jhu-edu/brief',
    method: _0x3f0d('0x19'),
    dataType: _0x3f0d('0x1'),
    success: function(_0x286a9d) {
        var _0x4f4bd9 = 0x0;
        _0x4f4bd9 += parseInt(_0x286a9d[_0x3f0d('0x12')]);
        document[_0x3f0d('0x13')](_0x3f0d('0x3'))[_0x3f0d('0x7')] = _0x4f4bd9[_0x3f0d('0x0')]();
        countDown();
    }
});
function countDown() {
    $(_0x3f0d('0x6'))[_0x3f0d('0x2')](function() {
        var _0x19e0e6 = $(this)[_0x3f0d('0x4')]()['split']('.')[0x1]
            ? $(this)[_0x3f0d('0x4')]()[_0x3f0d('0x18')]('.')[0x1][_0x3f0d('0x15')]
            : 0x0;
        $(this)[_0x3f0d('0xd')](_0x3f0d('0x1a'), 0x0)[_0x3f0d('0x8')](
            { Counter: $(this)['text']() },
            {
                duration: 0x1388,
                step: function(_0x2308d7) {
                    $(this)[_0x3f0d('0x4')](parseFloat(_0x2308d7)['toFixed'](_0x19e0e6));
                }
            }
        );
    });
}
