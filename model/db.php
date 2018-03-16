<?php
class db {
    //put your code here
    public function fetchdata($table){
        switch($table){
            case "testData":                
                $table = $this->getTestData($table);
                break;
            default :
                $table = null;
                break;
        }
        
        return $table;
    }
    
    public function getTestData($tblname)
    {
       //foreach table header
       $tableHeaders = array(
           "1 thing",
           "2 thing",
           "3 thing",
           "4 thing",
           "5 thing"
       );
        //foreach entry in table
       $entry1 = array(
           "1 thing" => "foo",
           "2 thing" => "test123",
           "3 thing" => "tes265235t123",
           "4 thing" => "test12hwrthw3",
           "5 thing" => "test12wrthwrth3",
       ); 
       
       $entry2 = array(
           "1 thing" => "vasdhibvsda",
           "2 thing" => "test12aerva3",
           "3 thing" => "tes265235aervaervt123",
           "4 thing" => "bafnadnvvv3",
           "5 thing" => "aduiofnrthwrth3",
       ); 
       
       $tableEntries = array(
           $entry1, $entry2
       );
       
       $tableDescription = "This is a test description of the table";

       $table["name"] = $tblname;
       $table["description"] = $tableDescription;
       $table["headers"] = $tableHeaders;
       $table["entries"] = $tableEntries;
      
       return $table;  
        
    }
    
}