<?php 
namespace App\Controller\Component;

use Cake\Controller\Component;

class CustomComponent extends Component
{
    public function doComplexOperation($amount1, $amount2)
    {
        return $amount1 + $amount2;
    }

	public function curl_hit($url = null,$xml = true){
		if(!$url) 
			return ; 

		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT_MS, 10000); //in miliseconds
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: close'));
        $res = curl_exec($ch);
        curl_close($ch);
        if($xml){
			$retValue = simplexml_load_string($res, 'SimpleXMLElement', LIBXML_NOCDATA);
			if ($retValue === false) {
			    echo "Failed loading XML: ";
			    foreach(libxml_get_errors() as $error) {
			        echo "<br>", $error->message;
			        die;
			    }
			} else {
			    return $retValue;
			} 
		}
		else{
			return $res;
		}
		

	}
    public function filter_title($description) {
        // (Save an) (Extra) $# Off ($#)
        if (preg_match('/((save )?(an )?(extra )?\$[0-9]+(\$?\-?\.?[0-9]+)? off (\$[0-9]+)?)/i', $description, $matches)) {
            return $matches[0];
            // (Save an) (Extra) #% Off ($#)
        } elseif (preg_match('/((save )?(an )?(extra )?[0-9]+\%?(\-[0-9]+)?\% off (\$[0-9]+)?)/i', $description, $matches)) {
            return $matches[0];
            // Save (up to) $# (Off)
        } elseif (preg_match('/(save (up to |an extra )?\$[0-9]+( off)?)/i', $description, $matches)) {
            return $matches[0];
            // Save (up to) #% (Off)
        } elseif (preg_match('/(save (up to |an extra )?[0-9]+\.?\-?[0-9]+\%( off)?)/i', $description, $matches)) {
            return $matches[0];
            // (get) (up to) #% Off 
        } elseif (preg_match('/((get |take |additional )?(up to )?[0-9]+\%?(\-[0-9]+)?\% off)/i', $description, $matches)) {
            return $matches[0];
            // (get) (up to) $# Off  
        } elseif (preg_match('/((get |take |additional )?(up to )?\$[0-9]+(\$?\-?\.?[0-9]+)? off)/i', $description, $matches)) {
            return $matches[0];
            // Buy One Get One (Free)
        } elseif (preg_match('/(buy (one|1) get (one|1) free)/i', $description, $matches)) {
            return $matches[0];
            // Buy One Get One % (Off)
        } elseif (preg_match('/(buy (one|1) get (one|1|the second|the 2nd) [0-9]+\%( off)?)/i', $description, $matches)) {
            return $matches[0];
            // Buy # Get # Free
        } elseif (preg_match('/(buy [0-9]+ get [0-9]+( free)?)/i', $description, $matches)) {
            return $matches[0];
            // Buy # Get $# Off
        } elseif (preg_match('/(buy [0-9]+ get \$[0-9]+( off)?)/i', $description, $matches)) {
            return $matches[0];
            // Buy # Get the #rd Free
        } elseif (preg_match('/(buy ([0-9]+) get  the [0-9]+(rd|th|nd) free)/i', $description, $matches)) {
            return $matches[0];
            // # for $#
        } elseif (preg_match('/([0-9]+ for \$[0-9]+)/i', $description, $matches)) {
            return $matches[0];
            // Up to $# off
        } elseif (preg_match('/(up to (\$[0-9]+|[0-9]+\%) off)/', $description, $matches)) {
            return $matches[0];
            // Free Shipping
        } elseif (preg_match('/free shipping/i', $description, $matches)) {
            return $matches[0];
            // Free Next Day Shipping
        } elseif (preg_match('/free next day shipping/i', $description, $matches)) {
            return $matches[0];
            // $# Flat Rate Shipping
        } elseif (preg_match('/\$[0-9]+ flat rate shipping/i', $description, $matches)) {
            return $matches[0];
        }
        return false;
    }
}