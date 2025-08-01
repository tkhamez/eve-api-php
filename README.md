[![Latest Stable Version](http://poser.pugx.org/tkhamez/eve-api/v)](https://packagist.org/packages/tkhamez/eve-api) 
[![Total Downloads](http://poser.pugx.org/tkhamez/eve-api/downloads)](https://packagist.org/packages/tkhamez/eve-api) 
[![License](http://poser.pugx.org/tkhamez/eve-api/license)](https://packagist.org/packages/tkhamez/eve-api) 
[![PHP Version Require](http://poser.pugx.org/tkhamez/eve-api/require/php)](https://packagist.org/packages/tkhamez/eve-api)

# EVE API

An OpenAPI Client Library for EVE Online (ESI).

For more information, please visit [https://developers.eveonline.com/docs/support/](https://developers.eveonline.com/docs/support/).

This client is generated from https://esi.evetech.net/meta/openapi.yaml (OpenAPI version 3.1).
It is generated for a specific compatibility date, which is the only date that must be used
for the X-Compatibility-Date header. This date is included in the version number.

_**Please note that the ESI OpenAPI 3 specification is still in beta status, so things can change!**_

This client contains a patch to fix the format of the X-Compatibility-Date header (the generator
ignores the specified format "date" and uses a string that includes the time, which will lead to
400 errors from the API).

## Versioning scheme

* Major: This number is increased everytime when the client was generated from an updated 
  OpenAPI specification file or any other breaking change.
* Minor: The compatibility date for which the API was generated in the format YYYYMMDD.
* Patch: Increased when the client was regenerated with a new minor or patch version of the
  generator library from the same OpenAPI specification file.

## Changelog

For API changes see [esi-issues/changelog.md](https://github.com/esi/esi-issues/blob/master/changelog.md),
for generator library changes see 
[OpenAPITools/openapi-generator/releases](https://github.com/OpenAPITools/openapi-generator/releases).

### Notable changes other than API updates

#### 2.20250802.0

- Switched to the new versioning scheme.

#### 1.0.0

- Forked from [tkhamez/swagger-eve-php](https://github.com/tkhamez/swagger-eve-php).
- Generated from the new OpenAPI 3.1 specification.
- Added a patch for the format of the compatibility date.

_Please note that the ESI OpenAPI 3 specification is still in beta status, so things can change!_

In addition to the change in the PHP namespace, the biggest changes between `swagger-eve-php` and 
`eve-api` are that many model classes have been renamed and each API method now requires the 
`$x_compatibility_date` parameter. You can see all the changes in
[this commit](https://github.com/tkhamez/eve-api-php/commit/862d19140f6dfadf699d463e53be4d16b5fe2e72).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "tkhamez/eve-api": "^2.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Tkhamez\Eve\API\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getAlliances($x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliances: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://esi.evetech.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AllianceApi* | [**getAlliances**](docs/Api/AllianceApi.md#getalliances) | **GET** /alliances | List all alliances
*AllianceApi* | [**getAlliancesAllianceId**](docs/Api/AllianceApi.md#getalliancesallianceid) | **GET** /alliances/{alliance_id} | Get alliance information
*AllianceApi* | [**getAlliancesAllianceIdCorporations**](docs/Api/AllianceApi.md#getalliancesallianceidcorporations) | **GET** /alliances/{alliance_id}/corporations | List alliance&#39;s corporations
*AllianceApi* | [**getAlliancesAllianceIdIcons**](docs/Api/AllianceApi.md#getalliancesallianceidicons) | **GET** /alliances/{alliance_id}/icons | Get alliance icon
*AssetsApi* | [**getCharactersCharacterIdAssets**](docs/Api/AssetsApi.md#getcharacterscharacteridassets) | **GET** /characters/{character_id}/assets | Get character assets
*AssetsApi* | [**getCorporationsCorporationIdAssets**](docs/Api/AssetsApi.md#getcorporationscorporationidassets) | **GET** /corporations/{corporation_id}/assets | Get corporation assets
*AssetsApi* | [**postCharactersCharacterIdAssetsLocations**](docs/Api/AssetsApi.md#postcharacterscharacteridassetslocations) | **POST** /characters/{character_id}/assets/locations | Get character asset locations
*AssetsApi* | [**postCharactersCharacterIdAssetsNames**](docs/Api/AssetsApi.md#postcharacterscharacteridassetsnames) | **POST** /characters/{character_id}/assets/names | Get character asset names
*AssetsApi* | [**postCorporationsCorporationIdAssetsLocations**](docs/Api/AssetsApi.md#postcorporationscorporationidassetslocations) | **POST** /corporations/{corporation_id}/assets/locations | Get corporation asset locations
*AssetsApi* | [**postCorporationsCorporationIdAssetsNames**](docs/Api/AssetsApi.md#postcorporationscorporationidassetsnames) | **POST** /corporations/{corporation_id}/assets/names | Get corporation asset names
*CalendarApi* | [**getCharactersCharacterIdCalendar**](docs/Api/CalendarApi.md#getcharacterscharacteridcalendar) | **GET** /characters/{character_id}/calendar | List calendar event summaries
*CalendarApi* | [**getCharactersCharacterIdCalendarEventId**](docs/Api/CalendarApi.md#getcharacterscharacteridcalendareventid) | **GET** /characters/{character_id}/calendar/{event_id} | Get an event
*CalendarApi* | [**getCharactersCharacterIdCalendarEventIdAttendees**](docs/Api/CalendarApi.md#getcharacterscharacteridcalendareventidattendees) | **GET** /characters/{character_id}/calendar/{event_id}/attendees | Get attendees
*CalendarApi* | [**putCharactersCharacterIdCalendarEventId**](docs/Api/CalendarApi.md#putcharacterscharacteridcalendareventid) | **PUT** /characters/{character_id}/calendar/{event_id} | Respond to an event
*CharacterApi* | [**getCharactersCharacterId**](docs/Api/CharacterApi.md#getcharacterscharacterid) | **GET** /characters/{character_id} | Get character&#39;s public information
*CharacterApi* | [**getCharactersCharacterIdAgentsResearch**](docs/Api/CharacterApi.md#getcharacterscharacteridagentsresearch) | **GET** /characters/{character_id}/agents_research | Get agents research
*CharacterApi* | [**getCharactersCharacterIdBlueprints**](docs/Api/CharacterApi.md#getcharacterscharacteridblueprints) | **GET** /characters/{character_id}/blueprints | Get blueprints
*CharacterApi* | [**getCharactersCharacterIdCorporationhistory**](docs/Api/CharacterApi.md#getcharacterscharacteridcorporationhistory) | **GET** /characters/{character_id}/corporationhistory | Get corporation history
*CharacterApi* | [**getCharactersCharacterIdFatigue**](docs/Api/CharacterApi.md#getcharacterscharacteridfatigue) | **GET** /characters/{character_id}/fatigue | Get jump fatigue
*CharacterApi* | [**getCharactersCharacterIdMedals**](docs/Api/CharacterApi.md#getcharacterscharacteridmedals) | **GET** /characters/{character_id}/medals | Get medals
*CharacterApi* | [**getCharactersCharacterIdNotifications**](docs/Api/CharacterApi.md#getcharacterscharacteridnotifications) | **GET** /characters/{character_id}/notifications | Get character notifications
*CharacterApi* | [**getCharactersCharacterIdNotificationsContacts**](docs/Api/CharacterApi.md#getcharacterscharacteridnotificationscontacts) | **GET** /characters/{character_id}/notifications/contacts | Get new contact notifications
*CharacterApi* | [**getCharactersCharacterIdPortrait**](docs/Api/CharacterApi.md#getcharacterscharacteridportrait) | **GET** /characters/{character_id}/portrait | Get character portraits
*CharacterApi* | [**getCharactersCharacterIdRoles**](docs/Api/CharacterApi.md#getcharacterscharacteridroles) | **GET** /characters/{character_id}/roles | Get character corporation roles
*CharacterApi* | [**getCharactersCharacterIdStandings**](docs/Api/CharacterApi.md#getcharacterscharacteridstandings) | **GET** /characters/{character_id}/standings | Get standings
*CharacterApi* | [**getCharactersCharacterIdTitles**](docs/Api/CharacterApi.md#getcharacterscharacteridtitles) | **GET** /characters/{character_id}/titles | Get character corporation titles
*CharacterApi* | [**postCharactersAffiliation**](docs/Api/CharacterApi.md#postcharactersaffiliation) | **POST** /characters/affiliation | Character affiliation
*CharacterApi* | [**postCharactersCharacterIdCspa**](docs/Api/CharacterApi.md#postcharacterscharacteridcspa) | **POST** /characters/{character_id}/cspa | Calculate a CSPA charge cost
*ClonesApi* | [**getCharactersCharacterIdClones**](docs/Api/ClonesApi.md#getcharacterscharacteridclones) | **GET** /characters/{character_id}/clones | Get clones
*ClonesApi* | [**getCharactersCharacterIdImplants**](docs/Api/ClonesApi.md#getcharacterscharacteridimplants) | **GET** /characters/{character_id}/implants | Get active implants
*ContactsApi* | [**deleteCharactersCharacterIdContacts**](docs/Api/ContactsApi.md#deletecharacterscharacteridcontacts) | **DELETE** /characters/{character_id}/contacts | Delete contacts
*ContactsApi* | [**getAlliancesAllianceIdContacts**](docs/Api/ContactsApi.md#getalliancesallianceidcontacts) | **GET** /alliances/{alliance_id}/contacts | Get alliance contacts
*ContactsApi* | [**getAlliancesAllianceIdContactsLabels**](docs/Api/ContactsApi.md#getalliancesallianceidcontactslabels) | **GET** /alliances/{alliance_id}/contacts/labels | Get alliance contact labels
*ContactsApi* | [**getCharactersCharacterIdContacts**](docs/Api/ContactsApi.md#getcharacterscharacteridcontacts) | **GET** /characters/{character_id}/contacts | Get contacts
*ContactsApi* | [**getCharactersCharacterIdContactsLabels**](docs/Api/ContactsApi.md#getcharacterscharacteridcontactslabels) | **GET** /characters/{character_id}/contacts/labels | Get contact labels
*ContactsApi* | [**getCorporationsCorporationIdContacts**](docs/Api/ContactsApi.md#getcorporationscorporationidcontacts) | **GET** /corporations/{corporation_id}/contacts | Get corporation contacts
*ContactsApi* | [**getCorporationsCorporationIdContactsLabels**](docs/Api/ContactsApi.md#getcorporationscorporationidcontactslabels) | **GET** /corporations/{corporation_id}/contacts/labels | Get corporation contact labels
*ContactsApi* | [**postCharactersCharacterIdContacts**](docs/Api/ContactsApi.md#postcharacterscharacteridcontacts) | **POST** /characters/{character_id}/contacts | Add contacts
*ContactsApi* | [**putCharactersCharacterIdContacts**](docs/Api/ContactsApi.md#putcharacterscharacteridcontacts) | **PUT** /characters/{character_id}/contacts | Edit contacts
*ContractsApi* | [**getCharactersCharacterIdContracts**](docs/Api/ContractsApi.md#getcharacterscharacteridcontracts) | **GET** /characters/{character_id}/contracts | Get contracts
*ContractsApi* | [**getCharactersCharacterIdContractsContractIdBids**](docs/Api/ContractsApi.md#getcharacterscharacteridcontractscontractidbids) | **GET** /characters/{character_id}/contracts/{contract_id}/bids | Get contract bids
*ContractsApi* | [**getCharactersCharacterIdContractsContractIdItems**](docs/Api/ContractsApi.md#getcharacterscharacteridcontractscontractiditems) | **GET** /characters/{character_id}/contracts/{contract_id}/items | Get contract items
*ContractsApi* | [**getContractsPublicBidsContractId**](docs/Api/ContractsApi.md#getcontractspublicbidscontractid) | **GET** /contracts/public/bids/{contract_id} | Get public contract bids
*ContractsApi* | [**getContractsPublicItemsContractId**](docs/Api/ContractsApi.md#getcontractspublicitemscontractid) | **GET** /contracts/public/items/{contract_id} | Get public contract items
*ContractsApi* | [**getContractsPublicRegionId**](docs/Api/ContractsApi.md#getcontractspublicregionid) | **GET** /contracts/public/{region_id} | Get public contracts
*ContractsApi* | [**getCorporationsCorporationIdContracts**](docs/Api/ContractsApi.md#getcorporationscorporationidcontracts) | **GET** /corporations/{corporation_id}/contracts | Get corporation contracts
*ContractsApi* | [**getCorporationsCorporationIdContractsContractIdBids**](docs/Api/ContractsApi.md#getcorporationscorporationidcontractscontractidbids) | **GET** /corporations/{corporation_id}/contracts/{contract_id}/bids | Get corporation contract bids
*ContractsApi* | [**getCorporationsCorporationIdContractsContractIdItems**](docs/Api/ContractsApi.md#getcorporationscorporationidcontractscontractiditems) | **GET** /corporations/{corporation_id}/contracts/{contract_id}/items | Get corporation contract items
*CorporationApi* | [**getCorporationsCorporationId**](docs/Api/CorporationApi.md#getcorporationscorporationid) | **GET** /corporations/{corporation_id} | Get corporation information
*CorporationApi* | [**getCorporationsCorporationIdAlliancehistory**](docs/Api/CorporationApi.md#getcorporationscorporationidalliancehistory) | **GET** /corporations/{corporation_id}/alliancehistory | Get alliance history
*CorporationApi* | [**getCorporationsCorporationIdBlueprints**](docs/Api/CorporationApi.md#getcorporationscorporationidblueprints) | **GET** /corporations/{corporation_id}/blueprints | Get corporation blueprints
*CorporationApi* | [**getCorporationsCorporationIdContainersLogs**](docs/Api/CorporationApi.md#getcorporationscorporationidcontainerslogs) | **GET** /corporations/{corporation_id}/containers/logs | Get all corporation ALSC logs
*CorporationApi* | [**getCorporationsCorporationIdDivisions**](docs/Api/CorporationApi.md#getcorporationscorporationiddivisions) | **GET** /corporations/{corporation_id}/divisions | Get corporation divisions
*CorporationApi* | [**getCorporationsCorporationIdFacilities**](docs/Api/CorporationApi.md#getcorporationscorporationidfacilities) | **GET** /corporations/{corporation_id}/facilities | Get corporation facilities
*CorporationApi* | [**getCorporationsCorporationIdIcons**](docs/Api/CorporationApi.md#getcorporationscorporationidicons) | **GET** /corporations/{corporation_id}/icons | Get corporation icon
*CorporationApi* | [**getCorporationsCorporationIdMedals**](docs/Api/CorporationApi.md#getcorporationscorporationidmedals) | **GET** /corporations/{corporation_id}/medals | Get corporation medals
*CorporationApi* | [**getCorporationsCorporationIdMedalsIssued**](docs/Api/CorporationApi.md#getcorporationscorporationidmedalsissued) | **GET** /corporations/{corporation_id}/medals/issued | Get corporation issued medals
*CorporationApi* | [**getCorporationsCorporationIdMembers**](docs/Api/CorporationApi.md#getcorporationscorporationidmembers) | **GET** /corporations/{corporation_id}/members | Get corporation members
*CorporationApi* | [**getCorporationsCorporationIdMembersLimit**](docs/Api/CorporationApi.md#getcorporationscorporationidmemberslimit) | **GET** /corporations/{corporation_id}/members/limit | Get corporation member limit
*CorporationApi* | [**getCorporationsCorporationIdMembersTitles**](docs/Api/CorporationApi.md#getcorporationscorporationidmemberstitles) | **GET** /corporations/{corporation_id}/members/titles | Get corporation&#39;s members&#39; titles
*CorporationApi* | [**getCorporationsCorporationIdMembertracking**](docs/Api/CorporationApi.md#getcorporationscorporationidmembertracking) | **GET** /corporations/{corporation_id}/membertracking | Track corporation members
*CorporationApi* | [**getCorporationsCorporationIdRoles**](docs/Api/CorporationApi.md#getcorporationscorporationidroles) | **GET** /corporations/{corporation_id}/roles | Get corporation member roles
*CorporationApi* | [**getCorporationsCorporationIdRolesHistory**](docs/Api/CorporationApi.md#getcorporationscorporationidroleshistory) | **GET** /corporations/{corporation_id}/roles/history | Get corporation member roles history
*CorporationApi* | [**getCorporationsCorporationIdShareholders**](docs/Api/CorporationApi.md#getcorporationscorporationidshareholders) | **GET** /corporations/{corporation_id}/shareholders | Get corporation shareholders
*CorporationApi* | [**getCorporationsCorporationIdStandings**](docs/Api/CorporationApi.md#getcorporationscorporationidstandings) | **GET** /corporations/{corporation_id}/standings | Get corporation standings
*CorporationApi* | [**getCorporationsCorporationIdStarbases**](docs/Api/CorporationApi.md#getcorporationscorporationidstarbases) | **GET** /corporations/{corporation_id}/starbases | Get corporation starbases (POSes)
*CorporationApi* | [**getCorporationsCorporationIdStarbasesStarbaseId**](docs/Api/CorporationApi.md#getcorporationscorporationidstarbasesstarbaseid) | **GET** /corporations/{corporation_id}/starbases/{starbase_id} | Get starbase (POS) detail
*CorporationApi* | [**getCorporationsCorporationIdStructures**](docs/Api/CorporationApi.md#getcorporationscorporationidstructures) | **GET** /corporations/{corporation_id}/structures | Get corporation structures
*CorporationApi* | [**getCorporationsCorporationIdTitles**](docs/Api/CorporationApi.md#getcorporationscorporationidtitles) | **GET** /corporations/{corporation_id}/titles | Get corporation titles
*CorporationApi* | [**getCorporationsNpccorps**](docs/Api/CorporationApi.md#getcorporationsnpccorps) | **GET** /corporations/npccorps | Get npc corporations
*DogmaApi* | [**getDogmaAttributes**](docs/Api/DogmaApi.md#getdogmaattributes) | **GET** /dogma/attributes | Get attributes
*DogmaApi* | [**getDogmaAttributesAttributeId**](docs/Api/DogmaApi.md#getdogmaattributesattributeid) | **GET** /dogma/attributes/{attribute_id} | Get attribute information
*DogmaApi* | [**getDogmaDynamicItemsTypeIdItemId**](docs/Api/DogmaApi.md#getdogmadynamicitemstypeiditemid) | **GET** /dogma/dynamic/items/{type_id}/{item_id} | Get dynamic item information
*DogmaApi* | [**getDogmaEffects**](docs/Api/DogmaApi.md#getdogmaeffects) | **GET** /dogma/effects | Get effects
*DogmaApi* | [**getDogmaEffectsEffectId**](docs/Api/DogmaApi.md#getdogmaeffectseffectid) | **GET** /dogma/effects/{effect_id} | Get effect information
*FactionWarfareApi* | [**getCharactersCharacterIdFwStats**](docs/Api/FactionWarfareApi.md#getcharacterscharacteridfwstats) | **GET** /characters/{character_id}/fw/stats | Overview of a character involved in faction warfare
*FactionWarfareApi* | [**getCorporationsCorporationIdFwStats**](docs/Api/FactionWarfareApi.md#getcorporationscorporationidfwstats) | **GET** /corporations/{corporation_id}/fw/stats | Overview of a corporation involved in faction warfare
*FactionWarfareApi* | [**getFwLeaderboards**](docs/Api/FactionWarfareApi.md#getfwleaderboards) | **GET** /fw/leaderboards | List of the top factions in faction warfare
*FactionWarfareApi* | [**getFwLeaderboardsCharacters**](docs/Api/FactionWarfareApi.md#getfwleaderboardscharacters) | **GET** /fw/leaderboards/characters | List of the top pilots in faction warfare
*FactionWarfareApi* | [**getFwLeaderboardsCorporations**](docs/Api/FactionWarfareApi.md#getfwleaderboardscorporations) | **GET** /fw/leaderboards/corporations | List of the top corporations in faction warfare
*FactionWarfareApi* | [**getFwStats**](docs/Api/FactionWarfareApi.md#getfwstats) | **GET** /fw/stats | An overview of statistics about factions involved in faction warfare
*FactionWarfareApi* | [**getFwSystems**](docs/Api/FactionWarfareApi.md#getfwsystems) | **GET** /fw/systems | Ownership of faction warfare systems
*FactionWarfareApi* | [**getFwWars**](docs/Api/FactionWarfareApi.md#getfwwars) | **GET** /fw/wars | Data about which NPC factions are at war
*FittingsApi* | [**deleteCharactersCharacterIdFittingsFittingId**](docs/Api/FittingsApi.md#deletecharacterscharacteridfittingsfittingid) | **DELETE** /characters/{character_id}/fittings/{fitting_id} | Delete fitting
*FittingsApi* | [**getCharactersCharacterIdFittings**](docs/Api/FittingsApi.md#getcharacterscharacteridfittings) | **GET** /characters/{character_id}/fittings | Get fittings
*FittingsApi* | [**postCharactersCharacterIdFittings**](docs/Api/FittingsApi.md#postcharacterscharacteridfittings) | **POST** /characters/{character_id}/fittings | Create fitting
*FleetsApi* | [**deleteFleetsFleetIdMembersMemberId**](docs/Api/FleetsApi.md#deletefleetsfleetidmembersmemberid) | **DELETE** /fleets/{fleet_id}/members/{member_id} | Kick fleet member
*FleetsApi* | [**deleteFleetsFleetIdSquadsSquadId**](docs/Api/FleetsApi.md#deletefleetsfleetidsquadssquadid) | **DELETE** /fleets/{fleet_id}/squads/{squad_id} | Delete fleet squad
*FleetsApi* | [**deleteFleetsFleetIdWingsWingId**](docs/Api/FleetsApi.md#deletefleetsfleetidwingswingid) | **DELETE** /fleets/{fleet_id}/wings/{wing_id} | Delete fleet wing
*FleetsApi* | [**getCharactersCharacterIdFleet**](docs/Api/FleetsApi.md#getcharacterscharacteridfleet) | **GET** /characters/{character_id}/fleet | Get character fleet info
*FleetsApi* | [**getFleetsFleetId**](docs/Api/FleetsApi.md#getfleetsfleetid) | **GET** /fleets/{fleet_id} | Get fleet information
*FleetsApi* | [**getFleetsFleetIdMembers**](docs/Api/FleetsApi.md#getfleetsfleetidmembers) | **GET** /fleets/{fleet_id}/members | Get fleet members
*FleetsApi* | [**getFleetsFleetIdWings**](docs/Api/FleetsApi.md#getfleetsfleetidwings) | **GET** /fleets/{fleet_id}/wings | Get fleet wings
*FleetsApi* | [**postFleetsFleetIdMembers**](docs/Api/FleetsApi.md#postfleetsfleetidmembers) | **POST** /fleets/{fleet_id}/members | Create fleet invitation
*FleetsApi* | [**postFleetsFleetIdWings**](docs/Api/FleetsApi.md#postfleetsfleetidwings) | **POST** /fleets/{fleet_id}/wings | Create fleet wing
*FleetsApi* | [**postFleetsFleetIdWingsWingIdSquads**](docs/Api/FleetsApi.md#postfleetsfleetidwingswingidsquads) | **POST** /fleets/{fleet_id}/wings/{wing_id}/squads | Create fleet squad
*FleetsApi* | [**putFleetsFleetId**](docs/Api/FleetsApi.md#putfleetsfleetid) | **PUT** /fleets/{fleet_id} | Update fleet
*FleetsApi* | [**putFleetsFleetIdMembersMemberId**](docs/Api/FleetsApi.md#putfleetsfleetidmembersmemberid) | **PUT** /fleets/{fleet_id}/members/{member_id} | Move fleet member
*FleetsApi* | [**putFleetsFleetIdSquadsSquadId**](docs/Api/FleetsApi.md#putfleetsfleetidsquadssquadid) | **PUT** /fleets/{fleet_id}/squads/{squad_id} | Rename fleet squad
*FleetsApi* | [**putFleetsFleetIdWingsWingId**](docs/Api/FleetsApi.md#putfleetsfleetidwingswingid) | **PUT** /fleets/{fleet_id}/wings/{wing_id} | Rename fleet wing
*IncursionsApi* | [**getIncursions**](docs/Api/IncursionsApi.md#getincursions) | **GET** /incursions | List incursions
*IndustryApi* | [**getCharactersCharacterIdIndustryJobs**](docs/Api/IndustryApi.md#getcharacterscharacteridindustryjobs) | **GET** /characters/{character_id}/industry/jobs | List character industry jobs
*IndustryApi* | [**getCharactersCharacterIdMining**](docs/Api/IndustryApi.md#getcharacterscharacteridmining) | **GET** /characters/{character_id}/mining | Character mining ledger
*IndustryApi* | [**getCorporationCorporationIdMiningExtractions**](docs/Api/IndustryApi.md#getcorporationcorporationidminingextractions) | **GET** /corporation/{corporation_id}/mining/extractions | Moon extraction timers
*IndustryApi* | [**getCorporationCorporationIdMiningObservers**](docs/Api/IndustryApi.md#getcorporationcorporationidminingobservers) | **GET** /corporation/{corporation_id}/mining/observers | Corporation mining observers
*IndustryApi* | [**getCorporationCorporationIdMiningObserversObserverId**](docs/Api/IndustryApi.md#getcorporationcorporationidminingobserversobserverid) | **GET** /corporation/{corporation_id}/mining/observers/{observer_id} | Observed corporation mining
*IndustryApi* | [**getCorporationsCorporationIdIndustryJobs**](docs/Api/IndustryApi.md#getcorporationscorporationidindustryjobs) | **GET** /corporations/{corporation_id}/industry/jobs | List corporation industry jobs
*IndustryApi* | [**getIndustryFacilities**](docs/Api/IndustryApi.md#getindustryfacilities) | **GET** /industry/facilities | List industry facilities
*IndustryApi* | [**getIndustrySystems**](docs/Api/IndustryApi.md#getindustrysystems) | **GET** /industry/systems | List solar system cost indices
*InsuranceApi* | [**getInsurancePrices**](docs/Api/InsuranceApi.md#getinsuranceprices) | **GET** /insurance/prices | List insurance levels
*KillmailsApi* | [**getCharactersCharacterIdKillmailsRecent**](docs/Api/KillmailsApi.md#getcharacterscharacteridkillmailsrecent) | **GET** /characters/{character_id}/killmails/recent | Get a character&#39;s recent kills and losses
*KillmailsApi* | [**getCorporationsCorporationIdKillmailsRecent**](docs/Api/KillmailsApi.md#getcorporationscorporationidkillmailsrecent) | **GET** /corporations/{corporation_id}/killmails/recent | Get a corporation&#39;s recent kills and losses
*KillmailsApi* | [**getKillmailsKillmailIdKillmailHash**](docs/Api/KillmailsApi.md#getkillmailskillmailidkillmailhash) | **GET** /killmails/{killmail_id}/{killmail_hash} | Get a single killmail
*LocationApi* | [**getCharactersCharacterIdLocation**](docs/Api/LocationApi.md#getcharacterscharacteridlocation) | **GET** /characters/{character_id}/location | Get character location
*LocationApi* | [**getCharactersCharacterIdOnline**](docs/Api/LocationApi.md#getcharacterscharacteridonline) | **GET** /characters/{character_id}/online | Get character online
*LocationApi* | [**getCharactersCharacterIdShip**](docs/Api/LocationApi.md#getcharacterscharacteridship) | **GET** /characters/{character_id}/ship | Get current ship
*LoyaltyApi* | [**getCharactersCharacterIdLoyaltyPoints**](docs/Api/LoyaltyApi.md#getcharacterscharacteridloyaltypoints) | **GET** /characters/{character_id}/loyalty/points | Get loyalty points
*LoyaltyApi* | [**getLoyaltyStoresCorporationIdOffers**](docs/Api/LoyaltyApi.md#getloyaltystorescorporationidoffers) | **GET** /loyalty/stores/{corporation_id}/offers | List loyalty store offers
*MailApi* | [**deleteCharactersCharacterIdMailLabelsLabelId**](docs/Api/MailApi.md#deletecharacterscharacteridmaillabelslabelid) | **DELETE** /characters/{character_id}/mail/labels/{label_id} | Delete a mail label
*MailApi* | [**deleteCharactersCharacterIdMailMailId**](docs/Api/MailApi.md#deletecharacterscharacteridmailmailid) | **DELETE** /characters/{character_id}/mail/{mail_id} | Delete a mail
*MailApi* | [**getCharactersCharacterIdMail**](docs/Api/MailApi.md#getcharacterscharacteridmail) | **GET** /characters/{character_id}/mail | Return mail headers
*MailApi* | [**getCharactersCharacterIdMailLabels**](docs/Api/MailApi.md#getcharacterscharacteridmaillabels) | **GET** /characters/{character_id}/mail/labels | Get mail labels and unread counts
*MailApi* | [**getCharactersCharacterIdMailLists**](docs/Api/MailApi.md#getcharacterscharacteridmaillists) | **GET** /characters/{character_id}/mail/lists | Return mailing list subscriptions
*MailApi* | [**getCharactersCharacterIdMailMailId**](docs/Api/MailApi.md#getcharacterscharacteridmailmailid) | **GET** /characters/{character_id}/mail/{mail_id} | Return a mail
*MailApi* | [**postCharactersCharacterIdMail**](docs/Api/MailApi.md#postcharacterscharacteridmail) | **POST** /characters/{character_id}/mail | Send a new mail
*MailApi* | [**postCharactersCharacterIdMailLabels**](docs/Api/MailApi.md#postcharacterscharacteridmaillabels) | **POST** /characters/{character_id}/mail/labels | Create a mail label
*MailApi* | [**putCharactersCharacterIdMailMailId**](docs/Api/MailApi.md#putcharacterscharacteridmailmailid) | **PUT** /characters/{character_id}/mail/{mail_id} | Update metadata about a mail
*MarketApi* | [**getCharactersCharacterIdOrders**](docs/Api/MarketApi.md#getcharacterscharacteridorders) | **GET** /characters/{character_id}/orders | List open orders from a character
*MarketApi* | [**getCharactersCharacterIdOrdersHistory**](docs/Api/MarketApi.md#getcharacterscharacteridordershistory) | **GET** /characters/{character_id}/orders/history | List historical orders by a character
*MarketApi* | [**getCorporationsCorporationIdOrders**](docs/Api/MarketApi.md#getcorporationscorporationidorders) | **GET** /corporations/{corporation_id}/orders | List open orders from a corporation
*MarketApi* | [**getCorporationsCorporationIdOrdersHistory**](docs/Api/MarketApi.md#getcorporationscorporationidordershistory) | **GET** /corporations/{corporation_id}/orders/history | List historical orders from a corporation
*MarketApi* | [**getMarketsGroups**](docs/Api/MarketApi.md#getmarketsgroups) | **GET** /markets/groups | Get item groups
*MarketApi* | [**getMarketsGroupsMarketGroupId**](docs/Api/MarketApi.md#getmarketsgroupsmarketgroupid) | **GET** /markets/groups/{market_group_id} | Get item group information
*MarketApi* | [**getMarketsPrices**](docs/Api/MarketApi.md#getmarketsprices) | **GET** /markets/prices | List market prices
*MarketApi* | [**getMarketsRegionIdHistory**](docs/Api/MarketApi.md#getmarketsregionidhistory) | **GET** /markets/{region_id}/history | List historical market statistics in a region
*MarketApi* | [**getMarketsRegionIdOrders**](docs/Api/MarketApi.md#getmarketsregionidorders) | **GET** /markets/{region_id}/orders | List orders in a region
*MarketApi* | [**getMarketsRegionIdTypes**](docs/Api/MarketApi.md#getmarketsregionidtypes) | **GET** /markets/{region_id}/types | List type IDs relevant to a market
*MarketApi* | [**getMarketsStructuresStructureId**](docs/Api/MarketApi.md#getmarketsstructuresstructureid) | **GET** /markets/structures/{structure_id} | List orders in a structure
*PlanetaryInteractionApi* | [**getCharactersCharacterIdPlanets**](docs/Api/PlanetaryInteractionApi.md#getcharacterscharacteridplanets) | **GET** /characters/{character_id}/planets | Get colonies
*PlanetaryInteractionApi* | [**getCharactersCharacterIdPlanetsPlanetId**](docs/Api/PlanetaryInteractionApi.md#getcharacterscharacteridplanetsplanetid) | **GET** /characters/{character_id}/planets/{planet_id} | Get colony layout
*PlanetaryInteractionApi* | [**getCorporationsCorporationIdCustomsOffices**](docs/Api/PlanetaryInteractionApi.md#getcorporationscorporationidcustomsoffices) | **GET** /corporations/{corporation_id}/customs_offices | List corporation customs offices
*PlanetaryInteractionApi* | [**getUniverseSchematicsSchematicId**](docs/Api/PlanetaryInteractionApi.md#getuniverseschematicsschematicid) | **GET** /universe/schematics/{schematic_id} | Get schematic information
*RoutesApi* | [**getRouteOriginDestination**](docs/Api/RoutesApi.md#getrouteorigindestination) | **GET** /route/{origin}/{destination} | Get route
*SearchApi* | [**getCharactersCharacterIdSearch**](docs/Api/SearchApi.md#getcharacterscharacteridsearch) | **GET** /characters/{character_id}/search | Search on a string
*SkillsApi* | [**getCharactersCharacterIdAttributes**](docs/Api/SkillsApi.md#getcharacterscharacteridattributes) | **GET** /characters/{character_id}/attributes | Get character attributes
*SkillsApi* | [**getCharactersCharacterIdSkillqueue**](docs/Api/SkillsApi.md#getcharacterscharacteridskillqueue) | **GET** /characters/{character_id}/skillqueue | Get character&#39;s skill queue
*SkillsApi* | [**getCharactersCharacterIdSkills**](docs/Api/SkillsApi.md#getcharacterscharacteridskills) | **GET** /characters/{character_id}/skills | Get character skills
*SovereigntyApi* | [**getSovereigntyCampaigns**](docs/Api/SovereigntyApi.md#getsovereigntycampaigns) | **GET** /sovereignty/campaigns | List sovereignty campaigns
*SovereigntyApi* | [**getSovereigntyMap**](docs/Api/SovereigntyApi.md#getsovereigntymap) | **GET** /sovereignty/map | List sovereignty of systems
*SovereigntyApi* | [**getSovereigntyStructures**](docs/Api/SovereigntyApi.md#getsovereigntystructures) | **GET** /sovereignty/structures | List sovereignty structures
*StatusApi* | [**getStatus**](docs/Api/StatusApi.md#getstatus) | **GET** /status | Retrieve the uptime and player counts
*UniverseApi* | [**getUniverseAncestries**](docs/Api/UniverseApi.md#getuniverseancestries) | **GET** /universe/ancestries | Get ancestries
*UniverseApi* | [**getUniverseAsteroidBeltsAsteroidBeltId**](docs/Api/UniverseApi.md#getuniverseasteroidbeltsasteroidbeltid) | **GET** /universe/asteroid_belts/{asteroid_belt_id} | Get asteroid belt information
*UniverseApi* | [**getUniverseBloodlines**](docs/Api/UniverseApi.md#getuniversebloodlines) | **GET** /universe/bloodlines | Get bloodlines
*UniverseApi* | [**getUniverseCategories**](docs/Api/UniverseApi.md#getuniversecategories) | **GET** /universe/categories | Get item categories
*UniverseApi* | [**getUniverseCategoriesCategoryId**](docs/Api/UniverseApi.md#getuniversecategoriescategoryid) | **GET** /universe/categories/{category_id} | Get item category information
*UniverseApi* | [**getUniverseConstellations**](docs/Api/UniverseApi.md#getuniverseconstellations) | **GET** /universe/constellations | Get constellations
*UniverseApi* | [**getUniverseConstellationsConstellationId**](docs/Api/UniverseApi.md#getuniverseconstellationsconstellationid) | **GET** /universe/constellations/{constellation_id} | Get constellation information
*UniverseApi* | [**getUniverseFactions**](docs/Api/UniverseApi.md#getuniversefactions) | **GET** /universe/factions | Get factions
*UniverseApi* | [**getUniverseGraphics**](docs/Api/UniverseApi.md#getuniversegraphics) | **GET** /universe/graphics | Get graphics
*UniverseApi* | [**getUniverseGraphicsGraphicId**](docs/Api/UniverseApi.md#getuniversegraphicsgraphicid) | **GET** /universe/graphics/{graphic_id} | Get graphic information
*UniverseApi* | [**getUniverseGroups**](docs/Api/UniverseApi.md#getuniversegroups) | **GET** /universe/groups | Get item groups
*UniverseApi* | [**getUniverseGroupsGroupId**](docs/Api/UniverseApi.md#getuniversegroupsgroupid) | **GET** /universe/groups/{group_id} | Get item group information
*UniverseApi* | [**getUniverseMoonsMoonId**](docs/Api/UniverseApi.md#getuniversemoonsmoonid) | **GET** /universe/moons/{moon_id} | Get moon information
*UniverseApi* | [**getUniversePlanetsPlanetId**](docs/Api/UniverseApi.md#getuniverseplanetsplanetid) | **GET** /universe/planets/{planet_id} | Get planet information
*UniverseApi* | [**getUniverseRaces**](docs/Api/UniverseApi.md#getuniverseraces) | **GET** /universe/races | Get character races
*UniverseApi* | [**getUniverseRegions**](docs/Api/UniverseApi.md#getuniverseregions) | **GET** /universe/regions | Get regions
*UniverseApi* | [**getUniverseRegionsRegionId**](docs/Api/UniverseApi.md#getuniverseregionsregionid) | **GET** /universe/regions/{region_id} | Get region information
*UniverseApi* | [**getUniverseStargatesStargateId**](docs/Api/UniverseApi.md#getuniversestargatesstargateid) | **GET** /universe/stargates/{stargate_id} | Get stargate information
*UniverseApi* | [**getUniverseStarsStarId**](docs/Api/UniverseApi.md#getuniversestarsstarid) | **GET** /universe/stars/{star_id} | Get star information
*UniverseApi* | [**getUniverseStationsStationId**](docs/Api/UniverseApi.md#getuniversestationsstationid) | **GET** /universe/stations/{station_id} | Get station information
*UniverseApi* | [**getUniverseStructures**](docs/Api/UniverseApi.md#getuniversestructures) | **GET** /universe/structures | List all public structures
*UniverseApi* | [**getUniverseStructuresStructureId**](docs/Api/UniverseApi.md#getuniversestructuresstructureid) | **GET** /universe/structures/{structure_id} | Get structure information
*UniverseApi* | [**getUniverseSystemJumps**](docs/Api/UniverseApi.md#getuniversesystemjumps) | **GET** /universe/system_jumps | Get system jumps
*UniverseApi* | [**getUniverseSystemKills**](docs/Api/UniverseApi.md#getuniversesystemkills) | **GET** /universe/system_kills | Get system kills
*UniverseApi* | [**getUniverseSystems**](docs/Api/UniverseApi.md#getuniversesystems) | **GET** /universe/systems | Get solar systems
*UniverseApi* | [**getUniverseSystemsSystemId**](docs/Api/UniverseApi.md#getuniversesystemssystemid) | **GET** /universe/systems/{system_id} | Get solar system information
*UniverseApi* | [**getUniverseTypes**](docs/Api/UniverseApi.md#getuniversetypes) | **GET** /universe/types | Get types
*UniverseApi* | [**getUniverseTypesTypeId**](docs/Api/UniverseApi.md#getuniversetypestypeid) | **GET** /universe/types/{type_id} | Get type information
*UniverseApi* | [**postUniverseIds**](docs/Api/UniverseApi.md#postuniverseids) | **POST** /universe/ids | Bulk names to IDs
*UniverseApi* | [**postUniverseNames**](docs/Api/UniverseApi.md#postuniversenames) | **POST** /universe/names | Get names and categories for a set of IDs
*UserInterfaceApi* | [**postUiAutopilotWaypoint**](docs/Api/UserInterfaceApi.md#postuiautopilotwaypoint) | **POST** /ui/autopilot/waypoint | Set Autopilot Waypoint
*UserInterfaceApi* | [**postUiOpenwindowContract**](docs/Api/UserInterfaceApi.md#postuiopenwindowcontract) | **POST** /ui/openwindow/contract | Open Contract Window
*UserInterfaceApi* | [**postUiOpenwindowInformation**](docs/Api/UserInterfaceApi.md#postuiopenwindowinformation) | **POST** /ui/openwindow/information | Open Information Window
*UserInterfaceApi* | [**postUiOpenwindowMarketdetails**](docs/Api/UserInterfaceApi.md#postuiopenwindowmarketdetails) | **POST** /ui/openwindow/marketdetails | Open Market Details
*UserInterfaceApi* | [**postUiOpenwindowNewmail**](docs/Api/UserInterfaceApi.md#postuiopenwindownewmail) | **POST** /ui/openwindow/newmail | Open New Mail Window
*WalletApi* | [**getCharactersCharacterIdWallet**](docs/Api/WalletApi.md#getcharacterscharacteridwallet) | **GET** /characters/{character_id}/wallet | Get a character&#39;s wallet balance
*WalletApi* | [**getCharactersCharacterIdWalletJournal**](docs/Api/WalletApi.md#getcharacterscharacteridwalletjournal) | **GET** /characters/{character_id}/wallet/journal | Get character wallet journal
*WalletApi* | [**getCharactersCharacterIdWalletTransactions**](docs/Api/WalletApi.md#getcharacterscharacteridwallettransactions) | **GET** /characters/{character_id}/wallet/transactions | Get wallet transactions
*WalletApi* | [**getCorporationsCorporationIdWallets**](docs/Api/WalletApi.md#getcorporationscorporationidwallets) | **GET** /corporations/{corporation_id}/wallets | Returns a corporation&#39;s wallet balance
*WalletApi* | [**getCorporationsCorporationIdWalletsDivisionJournal**](docs/Api/WalletApi.md#getcorporationscorporationidwalletsdivisionjournal) | **GET** /corporations/{corporation_id}/wallets/{division}/journal | Get corporation wallet journal
*WalletApi* | [**getCorporationsCorporationIdWalletsDivisionTransactions**](docs/Api/WalletApi.md#getcorporationscorporationidwalletsdivisiontransactions) | **GET** /corporations/{corporation_id}/wallets/{division}/transactions | Get corporation wallet transactions
*WarsApi* | [**getWars**](docs/Api/WarsApi.md#getwars) | **GET** /wars | List wars
*WarsApi* | [**getWarsWarId**](docs/Api/WarsApi.md#getwarswarid) | **GET** /wars/{war_id} | Get war information
*WarsApi* | [**getWarsWarIdKillmails**](docs/Api/WarsApi.md#getwarswaridkillmails) | **GET** /wars/{war_id}/killmails | List kills for a war

## Models

- [AlliancesAllianceIdContactsGetInner](docs/Model/AlliancesAllianceIdContactsGetInner.md)
- [AlliancesAllianceIdContactsLabelsGetInner](docs/Model/AlliancesAllianceIdContactsLabelsGetInner.md)
- [AlliancesAllianceIdGet](docs/Model/AlliancesAllianceIdGet.md)
- [AlliancesAllianceIdIconsGet](docs/Model/AlliancesAllianceIdIconsGet.md)
- [CharactersAffiliationPostInner](docs/Model/CharactersAffiliationPostInner.md)
- [CharactersCharacterIdAgentsResearchGetInner](docs/Model/CharactersCharacterIdAgentsResearchGetInner.md)
- [CharactersCharacterIdAssetsGetInner](docs/Model/CharactersCharacterIdAssetsGetInner.md)
- [CharactersCharacterIdAssetsLocationsPostInner](docs/Model/CharactersCharacterIdAssetsLocationsPostInner.md)
- [CharactersCharacterIdAssetsLocationsPostInnerPosition](docs/Model/CharactersCharacterIdAssetsLocationsPostInnerPosition.md)
- [CharactersCharacterIdAssetsNamesPostInner](docs/Model/CharactersCharacterIdAssetsNamesPostInner.md)
- [CharactersCharacterIdAttributesGet](docs/Model/CharactersCharacterIdAttributesGet.md)
- [CharactersCharacterIdBlueprintsGetInner](docs/Model/CharactersCharacterIdBlueprintsGetInner.md)
- [CharactersCharacterIdCalendarEventIdAttendeesGetInner](docs/Model/CharactersCharacterIdCalendarEventIdAttendeesGetInner.md)
- [CharactersCharacterIdCalendarEventIdGet](docs/Model/CharactersCharacterIdCalendarEventIdGet.md)
- [CharactersCharacterIdCalendarGetInner](docs/Model/CharactersCharacterIdCalendarGetInner.md)
- [CharactersCharacterIdClonesGet](docs/Model/CharactersCharacterIdClonesGet.md)
- [CharactersCharacterIdClonesGetHomeLocation](docs/Model/CharactersCharacterIdClonesGetHomeLocation.md)
- [CharactersCharacterIdClonesGetJumpClonesInner](docs/Model/CharactersCharacterIdClonesGetJumpClonesInner.md)
- [CharactersCharacterIdContactsGetInner](docs/Model/CharactersCharacterIdContactsGetInner.md)
- [CharactersCharacterIdContractsContractIdBidsGetInner](docs/Model/CharactersCharacterIdContractsContractIdBidsGetInner.md)
- [CharactersCharacterIdContractsContractIdItemsGetInner](docs/Model/CharactersCharacterIdContractsContractIdItemsGetInner.md)
- [CharactersCharacterIdContractsGetInner](docs/Model/CharactersCharacterIdContractsGetInner.md)
- [CharactersCharacterIdCorporationhistoryGetInner](docs/Model/CharactersCharacterIdCorporationhistoryGetInner.md)
- [CharactersCharacterIdFatigueGet](docs/Model/CharactersCharacterIdFatigueGet.md)
- [CharactersCharacterIdFittingsGetInner](docs/Model/CharactersCharacterIdFittingsGetInner.md)
- [CharactersCharacterIdFittingsGetInnerItemsInner](docs/Model/CharactersCharacterIdFittingsGetInnerItemsInner.md)
- [CharactersCharacterIdFittingsPost](docs/Model/CharactersCharacterIdFittingsPost.md)
- [CharactersCharacterIdFleetGet](docs/Model/CharactersCharacterIdFleetGet.md)
- [CharactersCharacterIdFwStatsGet](docs/Model/CharactersCharacterIdFwStatsGet.md)
- [CharactersCharacterIdFwStatsGetKills](docs/Model/CharactersCharacterIdFwStatsGetKills.md)
- [CharactersCharacterIdFwStatsGetVictoryPoints](docs/Model/CharactersCharacterIdFwStatsGetVictoryPoints.md)
- [CharactersCharacterIdGet](docs/Model/CharactersCharacterIdGet.md)
- [CharactersCharacterIdIndustryJobsGetInner](docs/Model/CharactersCharacterIdIndustryJobsGetInner.md)
- [CharactersCharacterIdKillmailsRecentGetInner](docs/Model/CharactersCharacterIdKillmailsRecentGetInner.md)
- [CharactersCharacterIdLocationGet](docs/Model/CharactersCharacterIdLocationGet.md)
- [CharactersCharacterIdLoyaltyPointsGetInner](docs/Model/CharactersCharacterIdLoyaltyPointsGetInner.md)
- [CharactersCharacterIdMailGetInner](docs/Model/CharactersCharacterIdMailGetInner.md)
- [CharactersCharacterIdMailLabelsGet](docs/Model/CharactersCharacterIdMailLabelsGet.md)
- [CharactersCharacterIdMailLabelsGetLabelsInner](docs/Model/CharactersCharacterIdMailLabelsGetLabelsInner.md)
- [CharactersCharacterIdMailListsGetInner](docs/Model/CharactersCharacterIdMailListsGetInner.md)
- [CharactersCharacterIdMailMailIdGet](docs/Model/CharactersCharacterIdMailMailIdGet.md)
- [CharactersCharacterIdMedalsGetInner](docs/Model/CharactersCharacterIdMedalsGetInner.md)
- [CharactersCharacterIdMedalsGetInnerGraphicsInner](docs/Model/CharactersCharacterIdMedalsGetInnerGraphicsInner.md)
- [CharactersCharacterIdMiningGetInner](docs/Model/CharactersCharacterIdMiningGetInner.md)
- [CharactersCharacterIdNotificationsContactsGetInner](docs/Model/CharactersCharacterIdNotificationsContactsGetInner.md)
- [CharactersCharacterIdNotificationsGetInner](docs/Model/CharactersCharacterIdNotificationsGetInner.md)
- [CharactersCharacterIdOnlineGet](docs/Model/CharactersCharacterIdOnlineGet.md)
- [CharactersCharacterIdOrdersGetInner](docs/Model/CharactersCharacterIdOrdersGetInner.md)
- [CharactersCharacterIdOrdersHistoryGetInner](docs/Model/CharactersCharacterIdOrdersHistoryGetInner.md)
- [CharactersCharacterIdPlanetsGetInner](docs/Model/CharactersCharacterIdPlanetsGetInner.md)
- [CharactersCharacterIdPlanetsPlanetIdGet](docs/Model/CharactersCharacterIdPlanetsPlanetIdGet.md)
- [CharactersCharacterIdPlanetsPlanetIdGetLinksInner](docs/Model/CharactersCharacterIdPlanetsPlanetIdGetLinksInner.md)
- [CharactersCharacterIdPlanetsPlanetIdGetPinsInner](docs/Model/CharactersCharacterIdPlanetsPlanetIdGetPinsInner.md)
- [CharactersCharacterIdPlanetsPlanetIdGetPinsInnerContentsInner](docs/Model/CharactersCharacterIdPlanetsPlanetIdGetPinsInnerContentsInner.md)
- [CharactersCharacterIdPlanetsPlanetIdGetPinsInnerExtractorDetails](docs/Model/CharactersCharacterIdPlanetsPlanetIdGetPinsInnerExtractorDetails.md)
- [CharactersCharacterIdPlanetsPlanetIdGetPinsInnerExtractorDetailsHeadsInner](docs/Model/CharactersCharacterIdPlanetsPlanetIdGetPinsInnerExtractorDetailsHeadsInner.md)
- [CharactersCharacterIdPlanetsPlanetIdGetPinsInnerFactoryDetails](docs/Model/CharactersCharacterIdPlanetsPlanetIdGetPinsInnerFactoryDetails.md)
- [CharactersCharacterIdPlanetsPlanetIdGetRoutesInner](docs/Model/CharactersCharacterIdPlanetsPlanetIdGetRoutesInner.md)
- [CharactersCharacterIdPortraitGet](docs/Model/CharactersCharacterIdPortraitGet.md)
- [CharactersCharacterIdRolesGet](docs/Model/CharactersCharacterIdRolesGet.md)
- [CharactersCharacterIdSearchGet](docs/Model/CharactersCharacterIdSearchGet.md)
- [CharactersCharacterIdShipGet](docs/Model/CharactersCharacterIdShipGet.md)
- [CharactersCharacterIdSkillqueueGetInner](docs/Model/CharactersCharacterIdSkillqueueGetInner.md)
- [CharactersCharacterIdSkillsGet](docs/Model/CharactersCharacterIdSkillsGet.md)
- [CharactersCharacterIdSkillsGetSkillsInner](docs/Model/CharactersCharacterIdSkillsGetSkillsInner.md)
- [CharactersCharacterIdStandingsGetInner](docs/Model/CharactersCharacterIdStandingsGetInner.md)
- [CharactersCharacterIdTitlesGetInner](docs/Model/CharactersCharacterIdTitlesGetInner.md)
- [CharactersCharacterIdWalletJournalGetInner](docs/Model/CharactersCharacterIdWalletJournalGetInner.md)
- [CharactersCharacterIdWalletTransactionsGetInner](docs/Model/CharactersCharacterIdWalletTransactionsGetInner.md)
- [ContractsPublicBidsContractIdGetInner](docs/Model/ContractsPublicBidsContractIdGetInner.md)
- [ContractsPublicItemsContractIdGetInner](docs/Model/ContractsPublicItemsContractIdGetInner.md)
- [ContractsPublicRegionIdGetInner](docs/Model/ContractsPublicRegionIdGetInner.md)
- [CorporationCorporationIdMiningExtractionsGetInner](docs/Model/CorporationCorporationIdMiningExtractionsGetInner.md)
- [CorporationCorporationIdMiningObserversGetInner](docs/Model/CorporationCorporationIdMiningObserversGetInner.md)
- [CorporationCorporationIdMiningObserversObserverIdGetInner](docs/Model/CorporationCorporationIdMiningObserversObserverIdGetInner.md)
- [CorporationsCorporationIdAlliancehistoryGetInner](docs/Model/CorporationsCorporationIdAlliancehistoryGetInner.md)
- [CorporationsCorporationIdAssetsGetInner](docs/Model/CorporationsCorporationIdAssetsGetInner.md)
- [CorporationsCorporationIdBlueprintsGetInner](docs/Model/CorporationsCorporationIdBlueprintsGetInner.md)
- [CorporationsCorporationIdContactsGetInner](docs/Model/CorporationsCorporationIdContactsGetInner.md)
- [CorporationsCorporationIdContainersLogsGetInner](docs/Model/CorporationsCorporationIdContainersLogsGetInner.md)
- [CorporationsCorporationIdContractsGetInner](docs/Model/CorporationsCorporationIdContractsGetInner.md)
- [CorporationsCorporationIdCustomsOfficesGetInner](docs/Model/CorporationsCorporationIdCustomsOfficesGetInner.md)
- [CorporationsCorporationIdDivisionsGet](docs/Model/CorporationsCorporationIdDivisionsGet.md)
- [CorporationsCorporationIdDivisionsGetHangarInner](docs/Model/CorporationsCorporationIdDivisionsGetHangarInner.md)
- [CorporationsCorporationIdDivisionsGetWalletInner](docs/Model/CorporationsCorporationIdDivisionsGetWalletInner.md)
- [CorporationsCorporationIdFacilitiesGetInner](docs/Model/CorporationsCorporationIdFacilitiesGetInner.md)
- [CorporationsCorporationIdFwStatsGet](docs/Model/CorporationsCorporationIdFwStatsGet.md)
- [CorporationsCorporationIdFwStatsGetKills](docs/Model/CorporationsCorporationIdFwStatsGetKills.md)
- [CorporationsCorporationIdFwStatsGetVictoryPoints](docs/Model/CorporationsCorporationIdFwStatsGetVictoryPoints.md)
- [CorporationsCorporationIdGet](docs/Model/CorporationsCorporationIdGet.md)
- [CorporationsCorporationIdIconsGet](docs/Model/CorporationsCorporationIdIconsGet.md)
- [CorporationsCorporationIdIndustryJobsGetInner](docs/Model/CorporationsCorporationIdIndustryJobsGetInner.md)
- [CorporationsCorporationIdMedalsGetInner](docs/Model/CorporationsCorporationIdMedalsGetInner.md)
- [CorporationsCorporationIdMedalsIssuedGetInner](docs/Model/CorporationsCorporationIdMedalsIssuedGetInner.md)
- [CorporationsCorporationIdMembersTitlesGetInner](docs/Model/CorporationsCorporationIdMembersTitlesGetInner.md)
- [CorporationsCorporationIdMembertrackingGetInner](docs/Model/CorporationsCorporationIdMembertrackingGetInner.md)
- [CorporationsCorporationIdOrdersGetInner](docs/Model/CorporationsCorporationIdOrdersGetInner.md)
- [CorporationsCorporationIdOrdersHistoryGetInner](docs/Model/CorporationsCorporationIdOrdersHistoryGetInner.md)
- [CorporationsCorporationIdRolesGetInner](docs/Model/CorporationsCorporationIdRolesGetInner.md)
- [CorporationsCorporationIdRolesHistoryGetInner](docs/Model/CorporationsCorporationIdRolesHistoryGetInner.md)
- [CorporationsCorporationIdShareholdersGetInner](docs/Model/CorporationsCorporationIdShareholdersGetInner.md)
- [CorporationsCorporationIdStarbasesGetInner](docs/Model/CorporationsCorporationIdStarbasesGetInner.md)
- [CorporationsCorporationIdStarbasesStarbaseIdGet](docs/Model/CorporationsCorporationIdStarbasesStarbaseIdGet.md)
- [CorporationsCorporationIdStarbasesStarbaseIdGetFuelsInner](docs/Model/CorporationsCorporationIdStarbasesStarbaseIdGetFuelsInner.md)
- [CorporationsCorporationIdStructuresGetInner](docs/Model/CorporationsCorporationIdStructuresGetInner.md)
- [CorporationsCorporationIdStructuresGetInnerServicesInner](docs/Model/CorporationsCorporationIdStructuresGetInnerServicesInner.md)
- [CorporationsCorporationIdTitlesGetInner](docs/Model/CorporationsCorporationIdTitlesGetInner.md)
- [CorporationsCorporationIdWalletsDivisionJournalGetInner](docs/Model/CorporationsCorporationIdWalletsDivisionJournalGetInner.md)
- [CorporationsCorporationIdWalletsDivisionTransactionsGetInner](docs/Model/CorporationsCorporationIdWalletsDivisionTransactionsGetInner.md)
- [CorporationsCorporationIdWalletsGetInner](docs/Model/CorporationsCorporationIdWalletsGetInner.md)
- [DogmaAttributesAttributeIdGet](docs/Model/DogmaAttributesAttributeIdGet.md)
- [DogmaDynamicItemsTypeIdItemIdGet](docs/Model/DogmaDynamicItemsTypeIdItemIdGet.md)
- [DogmaDynamicItemsTypeIdItemIdGetDogmaAttributesInner](docs/Model/DogmaDynamicItemsTypeIdItemIdGetDogmaAttributesInner.md)
- [DogmaDynamicItemsTypeIdItemIdGetDogmaEffectsInner](docs/Model/DogmaDynamicItemsTypeIdItemIdGetDogmaEffectsInner.md)
- [DogmaEffectsEffectIdGet](docs/Model/DogmaEffectsEffectIdGet.md)
- [DogmaEffectsEffectIdGetModifiersInner](docs/Model/DogmaEffectsEffectIdGetModifiersInner.md)
- [Error](docs/Model/Error.md)
- [ErrorDetail](docs/Model/ErrorDetail.md)
- [FleetsFleetIdGet](docs/Model/FleetsFleetIdGet.md)
- [FleetsFleetIdMembersGetInner](docs/Model/FleetsFleetIdMembersGetInner.md)
- [FleetsFleetIdWingsGetInner](docs/Model/FleetsFleetIdWingsGetInner.md)
- [FleetsFleetIdWingsGetInnerSquadsInner](docs/Model/FleetsFleetIdWingsGetInnerSquadsInner.md)
- [FleetsFleetIdWingsPost](docs/Model/FleetsFleetIdWingsPost.md)
- [FleetsFleetIdWingsWingIdSquadsPost](docs/Model/FleetsFleetIdWingsWingIdSquadsPost.md)
- [FwLeaderboardsCharactersGet](docs/Model/FwLeaderboardsCharactersGet.md)
- [FwLeaderboardsCharactersGetKills](docs/Model/FwLeaderboardsCharactersGetKills.md)
- [FwLeaderboardsCharactersGetKillsActiveTotalInner](docs/Model/FwLeaderboardsCharactersGetKillsActiveTotalInner.md)
- [FwLeaderboardsCharactersGetKillsLastWeekInner](docs/Model/FwLeaderboardsCharactersGetKillsLastWeekInner.md)
- [FwLeaderboardsCharactersGetKillsYesterdayInner](docs/Model/FwLeaderboardsCharactersGetKillsYesterdayInner.md)
- [FwLeaderboardsCharactersGetVictoryPoints](docs/Model/FwLeaderboardsCharactersGetVictoryPoints.md)
- [FwLeaderboardsCharactersGetVictoryPointsActiveTotalInner](docs/Model/FwLeaderboardsCharactersGetVictoryPointsActiveTotalInner.md)
- [FwLeaderboardsCharactersGetVictoryPointsLastWeekInner](docs/Model/FwLeaderboardsCharactersGetVictoryPointsLastWeekInner.md)
- [FwLeaderboardsCharactersGetVictoryPointsYesterdayInner](docs/Model/FwLeaderboardsCharactersGetVictoryPointsYesterdayInner.md)
- [FwLeaderboardsCorporationsGet](docs/Model/FwLeaderboardsCorporationsGet.md)
- [FwLeaderboardsCorporationsGetKills](docs/Model/FwLeaderboardsCorporationsGetKills.md)
- [FwLeaderboardsCorporationsGetKillsActiveTotalInner](docs/Model/FwLeaderboardsCorporationsGetKillsActiveTotalInner.md)
- [FwLeaderboardsCorporationsGetKillsLastWeekInner](docs/Model/FwLeaderboardsCorporationsGetKillsLastWeekInner.md)
- [FwLeaderboardsCorporationsGetKillsYesterdayInner](docs/Model/FwLeaderboardsCorporationsGetKillsYesterdayInner.md)
- [FwLeaderboardsCorporationsGetVictoryPoints](docs/Model/FwLeaderboardsCorporationsGetVictoryPoints.md)
- [FwLeaderboardsCorporationsGetVictoryPointsActiveTotalInner](docs/Model/FwLeaderboardsCorporationsGetVictoryPointsActiveTotalInner.md)
- [FwLeaderboardsCorporationsGetVictoryPointsLastWeekInner](docs/Model/FwLeaderboardsCorporationsGetVictoryPointsLastWeekInner.md)
- [FwLeaderboardsCorporationsGetVictoryPointsYesterdayInner](docs/Model/FwLeaderboardsCorporationsGetVictoryPointsYesterdayInner.md)
- [FwLeaderboardsGet](docs/Model/FwLeaderboardsGet.md)
- [FwLeaderboardsGetKills](docs/Model/FwLeaderboardsGetKills.md)
- [FwLeaderboardsGetKillsActiveTotalInner](docs/Model/FwLeaderboardsGetKillsActiveTotalInner.md)
- [FwLeaderboardsGetKillsLastWeekInner](docs/Model/FwLeaderboardsGetKillsLastWeekInner.md)
- [FwLeaderboardsGetKillsYesterdayInner](docs/Model/FwLeaderboardsGetKillsYesterdayInner.md)
- [FwLeaderboardsGetVictoryPoints](docs/Model/FwLeaderboardsGetVictoryPoints.md)
- [FwLeaderboardsGetVictoryPointsActiveTotalInner](docs/Model/FwLeaderboardsGetVictoryPointsActiveTotalInner.md)
- [FwLeaderboardsGetVictoryPointsLastWeekInner](docs/Model/FwLeaderboardsGetVictoryPointsLastWeekInner.md)
- [FwLeaderboardsGetVictoryPointsYesterdayInner](docs/Model/FwLeaderboardsGetVictoryPointsYesterdayInner.md)
- [FwStatsGetInner](docs/Model/FwStatsGetInner.md)
- [FwStatsGetInnerKills](docs/Model/FwStatsGetInnerKills.md)
- [FwStatsGetInnerVictoryPoints](docs/Model/FwStatsGetInnerVictoryPoints.md)
- [FwSystemsGetInner](docs/Model/FwSystemsGetInner.md)
- [FwWarsGetInner](docs/Model/FwWarsGetInner.md)
- [IncursionsGetInner](docs/Model/IncursionsGetInner.md)
- [IndustryFacilitiesGetInner](docs/Model/IndustryFacilitiesGetInner.md)
- [IndustrySystemsGetInner](docs/Model/IndustrySystemsGetInner.md)
- [IndustrySystemsGetInnerCostIndicesInner](docs/Model/IndustrySystemsGetInnerCostIndicesInner.md)
- [InsurancePricesGetInner](docs/Model/InsurancePricesGetInner.md)
- [InsurancePricesGetInnerLevelsInner](docs/Model/InsurancePricesGetInnerLevelsInner.md)
- [KillmailsKillmailIdKillmailHashGet](docs/Model/KillmailsKillmailIdKillmailHashGet.md)
- [KillmailsKillmailIdKillmailHashGetAttackersInner](docs/Model/KillmailsKillmailIdKillmailHashGetAttackersInner.md)
- [KillmailsKillmailIdKillmailHashGetVictim](docs/Model/KillmailsKillmailIdKillmailHashGetVictim.md)
- [KillmailsKillmailIdKillmailHashGetVictimItemsInner](docs/Model/KillmailsKillmailIdKillmailHashGetVictimItemsInner.md)
- [KillmailsKillmailIdKillmailHashGetVictimItemsInnerItemsInner](docs/Model/KillmailsKillmailIdKillmailHashGetVictimItemsInnerItemsInner.md)
- [KillmailsKillmailIdKillmailHashGetVictimPosition](docs/Model/KillmailsKillmailIdKillmailHashGetVictimPosition.md)
- [LoyaltyStoresCorporationIdOffersGetInner](docs/Model/LoyaltyStoresCorporationIdOffersGetInner.md)
- [LoyaltyStoresCorporationIdOffersGetInnerRequiredItemsInner](docs/Model/LoyaltyStoresCorporationIdOffersGetInnerRequiredItemsInner.md)
- [MarketsGroupsMarketGroupIdGet](docs/Model/MarketsGroupsMarketGroupIdGet.md)
- [MarketsPricesGetInner](docs/Model/MarketsPricesGetInner.md)
- [MarketsRegionIdHistoryGetInner](docs/Model/MarketsRegionIdHistoryGetInner.md)
- [MarketsRegionIdOrdersGetInner](docs/Model/MarketsRegionIdOrdersGetInner.md)
- [MarketsStructuresStructureIdGetInner](docs/Model/MarketsStructuresStructureIdGetInner.md)
- [PostCharactersCharacterIdFittingsRequest](docs/Model/PostCharactersCharacterIdFittingsRequest.md)
- [PostCharactersCharacterIdFittingsRequestItemsInner](docs/Model/PostCharactersCharacterIdFittingsRequestItemsInner.md)
- [PostCharactersCharacterIdMailLabelsRequest](docs/Model/PostCharactersCharacterIdMailLabelsRequest.md)
- [PostCharactersCharacterIdMailRequest](docs/Model/PostCharactersCharacterIdMailRequest.md)
- [PostCharactersCharacterIdMailRequestRecipientsInner](docs/Model/PostCharactersCharacterIdMailRequestRecipientsInner.md)
- [PostFleetsFleetIdMembersRequest](docs/Model/PostFleetsFleetIdMembersRequest.md)
- [PostUiOpenwindowNewmailRequest](docs/Model/PostUiOpenwindowNewmailRequest.md)
- [PutCharactersCharacterIdCalendarEventIdRequest](docs/Model/PutCharactersCharacterIdCalendarEventIdRequest.md)
- [PutCharactersCharacterIdMailMailIdRequest](docs/Model/PutCharactersCharacterIdMailMailIdRequest.md)
- [PutFleetsFleetIdMembersMemberIdRequest](docs/Model/PutFleetsFleetIdMembersMemberIdRequest.md)
- [PutFleetsFleetIdRequest](docs/Model/PutFleetsFleetIdRequest.md)
- [PutFleetsFleetIdSquadsSquadIdRequest](docs/Model/PutFleetsFleetIdSquadsSquadIdRequest.md)
- [SovereigntyCampaignsGetInner](docs/Model/SovereigntyCampaignsGetInner.md)
- [SovereigntyCampaignsGetInnerParticipantsInner](docs/Model/SovereigntyCampaignsGetInnerParticipantsInner.md)
- [SovereigntyMapGetInner](docs/Model/SovereigntyMapGetInner.md)
- [SovereigntyStructuresGetInner](docs/Model/SovereigntyStructuresGetInner.md)
- [StatusGet](docs/Model/StatusGet.md)
- [UniverseAncestriesGetInner](docs/Model/UniverseAncestriesGetInner.md)
- [UniverseAsteroidBeltsAsteroidBeltIdGet](docs/Model/UniverseAsteroidBeltsAsteroidBeltIdGet.md)
- [UniverseBloodlinesGetInner](docs/Model/UniverseBloodlinesGetInner.md)
- [UniverseCategoriesCategoryIdGet](docs/Model/UniverseCategoriesCategoryIdGet.md)
- [UniverseConstellationsConstellationIdGet](docs/Model/UniverseConstellationsConstellationIdGet.md)
- [UniverseFactionsGetInner](docs/Model/UniverseFactionsGetInner.md)
- [UniverseGraphicsGraphicIdGet](docs/Model/UniverseGraphicsGraphicIdGet.md)
- [UniverseGroupsGroupIdGet](docs/Model/UniverseGroupsGroupIdGet.md)
- [UniverseIdsPost](docs/Model/UniverseIdsPost.md)
- [UniverseIdsPostAgentsInner](docs/Model/UniverseIdsPostAgentsInner.md)
- [UniverseIdsPostAlliancesInner](docs/Model/UniverseIdsPostAlliancesInner.md)
- [UniverseIdsPostCharactersInner](docs/Model/UniverseIdsPostCharactersInner.md)
- [UniverseIdsPostConstellationsInner](docs/Model/UniverseIdsPostConstellationsInner.md)
- [UniverseIdsPostCorporationsInner](docs/Model/UniverseIdsPostCorporationsInner.md)
- [UniverseIdsPostFactionsInner](docs/Model/UniverseIdsPostFactionsInner.md)
- [UniverseIdsPostInventoryTypesInner](docs/Model/UniverseIdsPostInventoryTypesInner.md)
- [UniverseIdsPostRegionsInner](docs/Model/UniverseIdsPostRegionsInner.md)
- [UniverseIdsPostStationsInner](docs/Model/UniverseIdsPostStationsInner.md)
- [UniverseIdsPostSystemsInner](docs/Model/UniverseIdsPostSystemsInner.md)
- [UniverseMoonsMoonIdGet](docs/Model/UniverseMoonsMoonIdGet.md)
- [UniverseNamesPostInner](docs/Model/UniverseNamesPostInner.md)
- [UniversePlanetsPlanetIdGet](docs/Model/UniversePlanetsPlanetIdGet.md)
- [UniverseRacesGetInner](docs/Model/UniverseRacesGetInner.md)
- [UniverseRegionsRegionIdGet](docs/Model/UniverseRegionsRegionIdGet.md)
- [UniverseSchematicsSchematicIdGet](docs/Model/UniverseSchematicsSchematicIdGet.md)
- [UniverseStargatesStargateIdGet](docs/Model/UniverseStargatesStargateIdGet.md)
- [UniverseStargatesStargateIdGetDestination](docs/Model/UniverseStargatesStargateIdGetDestination.md)
- [UniverseStarsStarIdGet](docs/Model/UniverseStarsStarIdGet.md)
- [UniverseStationsStationIdGet](docs/Model/UniverseStationsStationIdGet.md)
- [UniverseStructuresStructureIdGet](docs/Model/UniverseStructuresStructureIdGet.md)
- [UniverseStructuresStructureIdGetPosition](docs/Model/UniverseStructuresStructureIdGetPosition.md)
- [UniverseSystemJumpsGetInner](docs/Model/UniverseSystemJumpsGetInner.md)
- [UniverseSystemKillsGetInner](docs/Model/UniverseSystemKillsGetInner.md)
- [UniverseSystemsSystemIdGet](docs/Model/UniverseSystemsSystemIdGet.md)
- [UniverseSystemsSystemIdGetPlanetsInner](docs/Model/UniverseSystemsSystemIdGetPlanetsInner.md)
- [UniverseTypesTypeIdGet](docs/Model/UniverseTypesTypeIdGet.md)
- [WarsWarIdGet](docs/Model/WarsWarIdGet.md)
- [WarsWarIdGetAggressor](docs/Model/WarsWarIdGetAggressor.md)
- [WarsWarIdGetAlliesInner](docs/Model/WarsWarIdGetAlliesInner.md)
- [WarsWarIdGetDefender](docs/Model/WarsWarIdGetDefender.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://login.eveonline.com/v2/oauth/authorize`
- **Scopes**: 
    - **esi-alliances.read_contacts.v1**: esi-alliances.read_contacts.v1
    - **esi-assets.read_assets.v1**: esi-assets.read_assets.v1
    - **esi-assets.read_corporation_assets.v1**: esi-assets.read_corporation_assets.v1
    - **esi-calendar.read_calendar_events.v1**: esi-calendar.read_calendar_events.v1
    - **esi-calendar.respond_calendar_events.v1**: esi-calendar.respond_calendar_events.v1
    - **esi-characters.read_agents_research.v1**: esi-characters.read_agents_research.v1
    - **esi-characters.read_blueprints.v1**: esi-characters.read_blueprints.v1
    - **esi-characters.read_contacts.v1**: esi-characters.read_contacts.v1
    - **esi-characters.read_corporation_roles.v1**: esi-characters.read_corporation_roles.v1
    - **esi-characters.read_fatigue.v1**: esi-characters.read_fatigue.v1
    - **esi-characters.read_fw_stats.v1**: esi-characters.read_fw_stats.v1
    - **esi-characters.read_loyalty.v1**: esi-characters.read_loyalty.v1
    - **esi-characters.read_medals.v1**: esi-characters.read_medals.v1
    - **esi-characters.read_notifications.v1**: esi-characters.read_notifications.v1
    - **esi-characters.read_standings.v1**: esi-characters.read_standings.v1
    - **esi-characters.read_titles.v1**: esi-characters.read_titles.v1
    - **esi-characters.write_contacts.v1**: esi-characters.write_contacts.v1
    - **esi-clones.read_clones.v1**: esi-clones.read_clones.v1
    - **esi-clones.read_implants.v1**: esi-clones.read_implants.v1
    - **esi-contracts.read_character_contracts.v1**: esi-contracts.read_character_contracts.v1
    - **esi-contracts.read_corporation_contracts.v1**: esi-contracts.read_corporation_contracts.v1
    - **esi-corporations.read_blueprints.v1**: esi-corporations.read_blueprints.v1
    - **esi-corporations.read_contacts.v1**: esi-corporations.read_contacts.v1
    - **esi-corporations.read_container_logs.v1**: esi-corporations.read_container_logs.v1
    - **esi-corporations.read_corporation_membership.v1**: esi-corporations.read_corporation_membership.v1
    - **esi-corporations.read_divisions.v1**: esi-corporations.read_divisions.v1
    - **esi-corporations.read_facilities.v1**: esi-corporations.read_facilities.v1
    - **esi-corporations.read_fw_stats.v1**: esi-corporations.read_fw_stats.v1
    - **esi-corporations.read_medals.v1**: esi-corporations.read_medals.v1
    - **esi-corporations.read_standings.v1**: esi-corporations.read_standings.v1
    - **esi-corporations.read_starbases.v1**: esi-corporations.read_starbases.v1
    - **esi-corporations.read_structures.v1**: esi-corporations.read_structures.v1
    - **esi-corporations.read_titles.v1**: esi-corporations.read_titles.v1
    - **esi-corporations.track_members.v1**: esi-corporations.track_members.v1
    - **esi-fittings.read_fittings.v1**: esi-fittings.read_fittings.v1
    - **esi-fittings.write_fittings.v1**: esi-fittings.write_fittings.v1
    - **esi-fleets.read_fleet.v1**: esi-fleets.read_fleet.v1
    - **esi-fleets.write_fleet.v1**: esi-fleets.write_fleet.v1
    - **esi-industry.read_character_jobs.v1**: esi-industry.read_character_jobs.v1
    - **esi-industry.read_character_mining.v1**: esi-industry.read_character_mining.v1
    - **esi-industry.read_corporation_jobs.v1**: esi-industry.read_corporation_jobs.v1
    - **esi-industry.read_corporation_mining.v1**: esi-industry.read_corporation_mining.v1
    - **esi-killmails.read_corporation_killmails.v1**: esi-killmails.read_corporation_killmails.v1
    - **esi-killmails.read_killmails.v1**: esi-killmails.read_killmails.v1
    - **esi-location.read_location.v1**: esi-location.read_location.v1
    - **esi-location.read_online.v1**: esi-location.read_online.v1
    - **esi-location.read_ship_type.v1**: esi-location.read_ship_type.v1
    - **esi-mail.organize_mail.v1**: esi-mail.organize_mail.v1
    - **esi-mail.read_mail.v1**: esi-mail.read_mail.v1
    - **esi-mail.send_mail.v1**: esi-mail.send_mail.v1
    - **esi-markets.read_character_orders.v1**: esi-markets.read_character_orders.v1
    - **esi-markets.read_corporation_orders.v1**: esi-markets.read_corporation_orders.v1
    - **esi-markets.structure_markets.v1**: esi-markets.structure_markets.v1
    - **esi-planets.manage_planets.v1**: esi-planets.manage_planets.v1
    - **esi-planets.read_customs_offices.v1**: esi-planets.read_customs_offices.v1
    - **esi-search.search_structures.v1**: esi-search.search_structures.v1
    - **esi-skills.read_skillqueue.v1**: esi-skills.read_skillqueue.v1
    - **esi-skills.read_skills.v1**: esi-skills.read_skills.v1
    - **esi-ui.open_window.v1**: esi-ui.open_window.v1
    - **esi-ui.write_waypoint.v1**: esi-ui.write_waypoint.v1
    - **esi-universe.read_structures.v1**: esi-universe.read_structures.v1
    - **esi-wallet.read_character_wallet.v1**: esi-wallet.read_character_wallet.v1
    - **esi-wallet.read_corporation_wallets.v1**: esi-wallet.read_corporation_wallets.v1

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2020-01-01`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
