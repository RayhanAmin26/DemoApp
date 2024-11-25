<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function download(){
        return response("Downloading a File");
    }

    // function downloadInvoice($invoiceID){
    //     return response("Downloading PDF Invoice with ID: {$invoiceID}");
    // }

    
    // function downloadInvoiceWithType($invoiceID,$fileType){
    //     return response("Downloading {$fileType} PDF Invoice with ID: {$invoiceID}");
    // }

      function downloadInvoice($invoiceID,$fileType="PDF"){
        return response("Downloading {$fileType}  Invoice with ID: {$invoiceID}");
    }

    function error(){
        return response("Error! No Invoice ID provided",404);

        // abort(404);
    }
    
}
