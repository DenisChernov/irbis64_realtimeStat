/**
 * Created with JetBrains PhpStorm.
 * User: demiin
 * Date: 19.06.14
 * Time: 15:09
 * To change this template use File | Settings | File Templates.
 */

var http = require ('http');
var query = require ('querystring');
var port = 37117;

http.createServer(function (req, res){
    console.log("[200 OK] " + req.method + " to " + req.url);

//    if (req.method == 'POST')
    {
        switch (req.url)
        {
            case "/getFilialList":
            {
                console.log(req.url);
                res.writeHead(200, "OK", {'ContentType' : 'application/json'});

                require_once ('bdOper.php');
                $bd = new bdOper();
                $bd->getFilials();
                $shortFilName = array();
                for ($i = 0; $i < count($bd->filials); $i++)
                {
                    $shortFilName['filial'. $i] = str_replace('илиал', '', $bd->filials[$i]);
                }
                $shortFilName['count'] = count($shortFilName);
                print (json_encode($shortFilName));

                res.end();
                break;
            }

        }

    }

}).listen(port);
console.log('listen on ' + port);