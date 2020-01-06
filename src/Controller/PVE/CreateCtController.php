<?php
// Require the autoloader

use Corsinvest\ProxmoxVE\Api\PVEItemNodesNode;

require_once '../../../vendor/autoload.php';

$client = new Corsinvest\ProxmoxVE\Api\PveClient("sd-158254.dedibox.fr");
$client->setResponseType('json');
//login check bool
if ($client->login('root', 'Supinf0752', 'pam')) {

//recupere l'id de vm/ct suivant qui est disponible
    $nextVmId = $client->get('/cluster/nextid')->getResponse()->data;

    //on creer un tableau Key=>value ex : "sd-158254"=>2GO avec la liste des noeud du cluster
    $ListNodesRam = array();
    foreach ($client->getNodes()->Index()->getResponse()->data as $node) {
        $ListNodesRam[$node->node] = $node->mem;
    }

//on selectionne le noeud ou il y a le plus de memoire RAM disponible
    $nodeMaxFreeMem = min($ListNodesRam);
    $nodeName = array_search($nodeMaxFreeMem, $ListNodesRam);
    var_dump($nodeName);
    //preparation des parametres pour la creation d'un CT
    $tabParam = [
        "ostemplate" => "local:vztmpl/debian-9-turnkey-wordpress_15.3-1_amd64.tar.gz",
        "vmid" => $nextVmId,
        "cores" => 2,
        "hostname" => "testapi.maf.com",
        "password" => "azerty",
        "net0" => "bridge=vmbr0,name=eth0,ip=1.2.3.4/24",
        "rootfs" => "volume=local:12",
        "memory" => "4096",
    ];

    $client->setResponseType('json');
    $task = $client->create('/nodes/' . $nodeName . '/lxc', $tabParam)->getResponse();

/*$client->delete('/nodes/sd-158254/lxc/107')->getResponse();
$client->delete('/nodes/sd-158254/lxc/108')->getResponse();
$client->delete('/nodes/sd-158254/lxc/109')->getResponse();
$client->delete('/nodes/sd-158254/lxc/110')->getResponse();
$client->delete('/nodes/sd-158254/lxc/111')->getResponse();
$client->delete('/nodes/sd-158254/lxc/112')->getResponse();
$client->delete('/nodes/sd-158254/lxc/113')->getResponse();
$client->delete('/nodes/sd-158254/lxc/114')->getResponse();
$client->delete('/nodes/sd-158254/lxc/115')->getResponse();
 */
    //var_dump($client->getNodes()->get("sd-158254")->getLxc());
} else {
    echo "KOOO";
}
