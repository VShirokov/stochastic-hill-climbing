<a name="notes"></a>
<h2>Notes</h2>
<a href="reddit.html" target="_blank">Reddit</a>
<br>rankingman youtube channel
<br>osm2pgrouting, overpass api - overpass ql,
gis stackexchange overpass-api tag,
<br>text to speech - festival, espeak, pico2wave/svox,
desbma/GoogleSpeech, pndurette/gTTS,
mycroftai/mimic, firefox common voice tts,
hamilton parks and recreation

<br>Loading json files into postgres rows
<pre>
sql> \set content `cat /tmp/test.json`
sql> create temp table t ( j jsonb );
sql> insert into t values (:'content');
sql> select * from t;
</pre>