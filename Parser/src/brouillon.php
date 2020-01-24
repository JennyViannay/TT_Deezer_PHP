public function Parse(string $url): ?Url
{
$id = 0 ;
$type = '' ;

//$newUrl = new Url($id, $type);

$types = array('album', 'playlist', 'artist', 'show', 'track');

$parseUrl = parse_url($url);
$path = $parseUrl['path'];

$infos = explode('/', $path);

foreach ($types as $elem){
if(in_array($elem, $infos, true)){
//$newUrl->setType($elem);
$type = $elem;
foreach ($infos as $info) {
if (is_numeric($info)) {
//$newUrl->setId($info);
$id = $info;
}
}
}
}
if($type && $id > 0){
var_dump("\n " .$id .' '.$type);
return new Url($id, $type);
}
return null;
}