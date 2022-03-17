<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2022-03-07
 *
 * Localized data
 */

Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:Model/Attribute:type/Value:IOTGateway' => 'IoT Gateway',
    'Class:Model/Attribute:type/Value:IOTGateway+' => '',
    'Class:Model/Attribute:type/Value:IOTSensor' => 'IoT Sensor',
    'Class:Model/Attribute:type/Value:IOTSensor+' => '',
));

//
// Class: IOTCustomer
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTCustomer' => 'IoT Kunde',
    'Class:IOTCustomer+' => '',
    'Class:IOTCustomer/Attribute:name' => 'Name',
    'Class:IOTCustomer/Attribute:name+' => '',
    'Class:IOTCustomer/Attribute:org_id' => 'Organisation',
    'Class:IOTCustomer/Attribute:org_id+' => '',
    'Class:IOTCustomer/Attribute:org_name' => 'Organisation Name',
    'Class:IOTCustomer/Attribute:org_name+' => '',
    'Class:IOTCustomer/Attribute:country' => 'Land',
    'Class:IOTCustomer/Attribute:country+' => '',
    'Class:IOTCustomer/Attribute:address' => 'Adresse',
    'Class:IOTCustomer/Attribute:address+' => '',
    'Class:IOTCustomer/Attribute:contact' => 'Kontaktperson',
    'Class:IOTCustomer/Attribute:contact+' => '',
    'Class:IOTCustomer/Attribute:iotgateway_list' => 'IoT Gateways',
    'Class:IOTCustomer/Attribute:iotgateway_list+' => '',
));

//
// Class: IOTGateway
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTGateway' => 'IoT Gateway',
    'Class:IOTGateway+' => '',
    'Class:IOTGateway/Attribute:device_id' => 'Device ID',
    'Class:IOTGateway/Attribute:device_id+' => 'Muss eine gültige GUID sein',
    'Class:IOTGateway/Attribute:cert_created' => 'Zertifikat erstellt',
    'Class:IOTGateway/Attribute:cert_created+' => '',
    'Class:IOTGateway/Attribute:cert_created/Value:no' => 'Nein',
    'Class:IOTGateway/Attribute:cert_created/Value:no+' => '',
    'Class:IOTGateway/Attribute:cert_created/Value:yes' => 'Ja',
    'Class:IOTGateway/Attribute:cert_created/Value:yes+' => '',
    'Class:IOTGateway/Attribute:cert_expire_date' => 'Zertifikat Ablaufdatum',
    'Class:IOTGateway/Attribute:cert_expire_date+' => '',
    'Class:IOTGateway/Attribute:customer_id' => 'Kunde',
    'Class:IOTGateway/Attribute:customer_id+' => '',
    'Class:IOTGateway/Attribute:customer_name' => 'Kunde Name',
    'Class:IOTGateway/Attribute:customer_name+' => '',
    'Class:IOTGateway/Attribute:material_list' => 'Materialliste',
    'Class:IOTGateway/Attribute:material_list+' => '',
    'Class:IOTGateway/Attribute:simcard_id' => 'SIM Karte',
    'Class:IOTGateway/Attribute:simcard_id+' => '',
    'Class:IOTGateway/Attribute:programversion_id' => 'Programm Version',
    'Class:IOTGateway/Attribute:programversion_id+' => '',
    'Class:IOTGateway/Attribute:firmwareversion_id' => 'Firmware Version',
    'Class:IOTGateway/Attribute:firmwareversion_id+' => '',
    'Class:IOTGateway/Attribute:remote_access' => 'Remote Access',
    'Class:IOTGateway/Attribute:remote_access+' => '',
    'Class:IOTGateway/Attribute:remote_access/Value:no' => 'Nein',
    'Class:IOTGateway/Attribute:remote_access/Value:no+' => '',
    'Class:IOTGateway/Attribute:remote_access/Value:yes' => 'Ja',
    'Class:IOTGateway/Attribute:remote_access/Value:yes+' => '',
    'Class:IOTGateway/Attribute:vpnd' => 'VPN on Demand',
    'Class:IOTGateway/Attribute:vpnd+' => '',
    'Class:IOTGateway/Attribute:vpnd/Value:no' => 'Nein',
    'Class:IOTGateway/Attribute:vpnd/Value:no+' => '',
    'Class:IOTGateway/Attribute:vpnd/Value:yes' => 'Ja',
    'Class:IOTGateway/Attribute:vpnd/Value:yes+' => '',
    'Class:IOTGateway/Attribute:iotsensors_list' => 'Sensoren',
    'Class:IOTGateway/Attribute:iotsensors_list+' => '',
    'IOTGateway:Certificate' => 'Zertifikat',
));

//
// Class: IOTSensor
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTSensor' => 'IoT Sensor',
    'Class:IOTSensor+' => '',
    'Class:IOTSensor/Attribute:iotgateway_list' => 'Gateway',
    'Class:IOTSensor/Attribute:iotgateway_list+' => '',
    'Class:IOTSensor/Attribute:collection' => 'Collection',
    'Class:IOTSensor/Attribute:collection+' => '',
    'Class:IOTSensor/Attribute:comment' => 'Anmerkung',
    'Class:IOTSensor/Attribute:comment+' => '',
));

//
// Class: IOTProgramVersion
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTProgramVersion' => 'IoT Programm Version',
    'Class:IOTProgramVersion+' => '',
    'Class:IOTProgramVersion/Attribute:description' => 'Beschreibung',
    'Class:IOTProgramVersion/Attribute:description+' => '',
    'Class:IOTProgramVersion/Attribute:iotgateway_list' => 'IoT Gateways',
    'Class:IOTProgramVersion/Attribute:iotgateway_list+' => '',
));

//
// Class: IOTFirmwareVersion
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTFirmwareVersion' => 'IoT Firmware Version',
    'Class:IOTFirmwareVersion+' => '',
    'Class:IOTFirmwareVersion/Attribute:description' => 'Beschreibung',
    'Class:IOTFirmwareVersion/Attribute:description+' => '',
    'Class:IOTFirmwareVersion/Attribute:iotgateway_list' => 'IoT Gateways',
    'Class:IOTFirmwareVersion/Attribute:iotgateway_list+' => '',
));

//
// Class: IOTApplication
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTApplication' => 'IoT Applikation',
    'Class:IOTApplication+' => '',
    'Class:IOTApplication/Attribute:description' => 'Beschreibung',
    'Class:IOTApplication/Attribute:description+' => '',
    'Class:IOTApplication/Attribute:iotgateway_list' => 'IoT Gateways',
    'Class:IOTApplication/Attribute:iotgateway_list+' => '',
));

//
// Class: IOTSimCard
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:IOTSimCard' => 'SIM Karte',
    'Class:IOTSimCard/Attribute:sim' => 'SIM Nummer',
    'Class:IOTSimCard/Attribute:iotgateways_list' => 'IoT Gateways',
    'Class:IOTSimCard/Attribute:phone_number' => 'Mobilnummer',
    'Class:IOTSimCard/Attribute:pin' => 'PIN',
    'Class:IOTSimCard/Attribute:puk' => 'PUK',
    'Class:IOTSimCard/Attribute:contract_start_date' => 'Vertragsstart',
    'Class:IOTSimCard/Attribute:contract_end_date' => 'Vertragsende',
    'Class:IOTSimCard/Attribute:termination_till_date' => 'Kündigung bis',
    'Class:IOTSimCard/Attribute:extended_till_date' => 'Verlängerung bis',
    'Class:IOTSimCard/Attribute:notice_by_date' => 'Benachrichtigung bis',
    'IOTSimCard:info' => 'Allgemeine Informationen',
    'IOTSimCard:numbers' => 'Karteninformationen',
    'IOTSimCard:date' => 'Vertragsdaten',
));

//
// Application Menu
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Menu:IOTManagement' => 'IoT Verwaltung',
    'Menu:IOTSpace' => 'IoT Bereich',
    'Menu:IOTSpace:Devices' => 'IoT Geräte',
    'Menu:IOTSpace:Options' => 'IoT Konfiguration',
    'Menu:IOTShortCut' => 'Shotcuts',
    'Menu:IOTCustomer' => 'IoT Kunden',
    'Menu:IOTCustomer+' => 'IoT Kunden',
    'Menu:IOTGateway' => 'IoT Gateways',
    'Menu:IOTGateway+' => 'IoT Gateways',
    'Menu:IOTSensor' => 'IoT Sensoren',
    'Menu:IOTSimCard' => 'IoT SIM Karten',
    'Menu:IOTSimCard+' => 'IoT SIM Karten',
    'Menu:IOTCable' => 'IoT Kabel',
    'Menu:IOTCable+' => 'IoT Kabel',
));
