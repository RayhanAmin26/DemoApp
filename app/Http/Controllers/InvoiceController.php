<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function invoice(Request $request ,$invoiceID){
        if ($request->has('download')){
            $type = $request->input('download');
            //color print or grayscale
            $printType = $request->input('download');
            if($printType =='color'){
                return response("Downloading colored {$type} Invoice with ID{$invoiceID}");
            }
            else  if($printType =='grayscale'){
                    return response("Downloading grayscale {$type} Invoice with ID{$invoiceID}");
            }
          
            return response("Downloading {$type} invoice with ID:{$invoiceID}");
        }

        if($request->has('email')){
            $email = $request->input('email');
            if($email==1){
                return response("Emailing invoice with ID:{$invoiceID}");
            }
        }

        return response("Displaying Invoice with ID:{$invoiceID}");
    }
    
}
