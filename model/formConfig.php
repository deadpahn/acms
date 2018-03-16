<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of formConfig
 *
 * @author reptile
 */
class formConfig {
    
    public $tbl_ServiceLog;
    public $tbl_Asset;
    public $tbl_Telco;
    public $tbl_Project;
    public $tbl_DomainNames;
    public $tbl_Employee;
    public $tbl_Accounts;
    public $tbl_Entities;
    public $tbl_FilingSecurityPermissions;
    public $tbl_FlaggedNotes;    
    
    public function __construct() {
        $this->setForms();
    }
    
    public function render($form = NULL)
    {
        $this->finalForm['name'] = "title of form";
        $this->finalForm['fields'] = $form;
        include "./templates/form.tpl.php";
    }
    
    public function setForms() {
        $this->tbl_ServiceLog = array(
            "id" => "int",
            "serviceDate" => "date",
            "taskType" => "string",
            "whoCompleted" => "string",
            "whoLogged" => "string",
            "notes" => "string",
            "costAssociated" => "int",
            "assetId" => "int"
        );
        
        $this->tbl_Asset = array(
            "id" => "int",
            "serialNumber" => "int",
            "manufacturer" => "string",
            "model" => "string",
            "macAddress" => "string",
            "imei" => "string",
            "ipAddress" => "string",
            "assetType" => "string",
            "notes" => "string",
            "assignedTo" => "string",
            "employeeId" => "int",
            "projectId" => "int"
        );
        
        $this->tbl_Telco = array(
            "id" => "int",
            "serviceNumber" => "int",
            "nrNumber" => "int",
            "accountNumber" => "int",
            "serviceType" => "int",
            "serviceDetails" => "string",
            "provisionDetails" => "string",
            "contractEndDate" => "string",
            "assetId" => "int",
            "employeeId" => "int",
            "projectId" => "int"
        );
        $this->tbl_Project = array(
            "id" => "int",
            "projectOffice" => "string",
            "streetNumber" => "string",
            "streetName" => "string",
            "streetType" => "string",
            "suburbCity" => "string",
            "state" => "string",
            "postalCode" => "string",
            "primaryPhoneNumberLink" => "string",
            "faxNumberLink" => "string",
            "entityId" => "id"
        );
        $this->tbl_DomainNames = array(
            "id" => "int",
            "domain" => "string",
            "domainRegistrar" => "string",
            "expiryDate" => "string",
            "projectId" => "int",
            "managedBy" => "string",
            "active" => "int"
        );
        $this->tbl_Employee = array(
            "id" => "int",
            "firstName" => "string",
            "surName" => "string",
            "dob" => "string",
            "commencementDate" => "string",
            "terminationDate" => "string",
            "departmentId" => "int",
            "entityId" => "int"
        );
        $this->tbl_Accounts = array(
            "id" => "int",
            "accountName" => "string",
            "accountType" => "string",
            "password" => "string",
            "dateSetup" => "string",
            "notes" => "string",
            "employeeId" => "int",
            "projectId" => "int",
        );
        $this->tbl_Entities = array(
            "id" => "int",
            "abreviation" => "string",
            "companyTrust" => "string",
            "abn" => "string",
            "acn" => "string",
            "director" => "string",
            "tfn" => "string",
            "bsb" => "string",
            "accountNumber" => "string"
        );
        $this->tbl_FilingSecurityPermissions = array(
            "id" => "int",
            "securityGroupName" => "string",
            "folderPermissions" => "string",
            "employeeId" => "int"
        );
        $this->tbl_FlaggedNotes = array(
            "id" => "int",
            "flagStartDate" => "string",
            "flagEndDate" => "string",
            "notes" => "string"
        );
    }
}