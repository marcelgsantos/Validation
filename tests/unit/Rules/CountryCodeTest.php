<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Rules;

/**
 * @group  rule
 * @covers Respect\Validation\Rules\CountryCode
 */
class CountryCodeTest extends \PHPUnit_Framework_TestCase
{
    public function providerForValidCountryCode()
    {
        return array(
            array('AD'),
            array('AE'),
            array('AF'),
            array('AG'),
            array('AI'),
            array('AL'),
            array('AM'),
            array('AO'),
            array('AQ'),
            array('AR'),
            array('AS'),
            array('AT'),
            array('AU'),
            array('AW'),
            array('AX'),
            array('AZ'),
            array('BA'),
            array('BB'),
            array('BD'),
            array('BE'),
            array('BF'),
            array('BG'),
            array('BH'),
            array('BI'),
            array('BJ'),
            array('BL'),
            array('BM'),
            array('BN'),
            array('BO'),
            array('BQ'),
            array('BR'),
            array('BS'),
            array('BT'),
            array('BV'),
            array('BW'),
            array('BY'),
            array('BZ'),
            array('CA'),
            array('CC'),
            array('CD'),
            array('CF'),
            array('CG'),
            array('CH'),
            array('CI'),
            array('CK'),
            array('CL'),
            array('CM'),
            array('CN'),
            array('CO'),
            array('CR'),
            array('CU'),
            array('CV'),
            array('CW'),
            array('CX'),
            array('CY'),
            array('CZ'),
            array('DE'),
            array('DJ'),
            array('DK'),
            array('DM'),
            array('DO'),
            array('DZ'),
            array('EC'),
            array('EE'),
            array('EG'),
            array('EH'),
            array('ER'),
            array('ES'),
            array('ET'),
            array('FI'),
            array('FJ'),
            array('FK'),
            array('FM'),
            array('FO'),
            array('FR'),
            array('GA'),
            array('GB'),
            array('GD'),
            array('GE'),
            array('GF'),
            array('GG'),
            array('GH'),
            array('GI'),
            array('GL'),
            array('GM'),
            array('GN'),
            array('GP'),
            array('GQ'),
            array('GR'),
            array('GS'),
            array('GT'),
            array('GU'),
            array('GW'),
            array('GY'),
            array('HK'),
            array('HM'),
            array('HN'),
            array('HR'),
            array('HT'),
            array('HU'),
            array('ID'),
            array('IE'),
            array('IL'),
            array('IM'),
            array('IN'),
            array('IO'),
            array('IQ'),
            array('IR'),
            array('IS'),
            array('IT'),
            array('JE'),
            array('JM'),
            array('JO'),
            array('JP'),
            array('KE'),
            array('KG'),
            array('KH'),
            array('KI'),
            array('KM'),
            array('KN'),
            array('KP'),
            array('KR'),
            array('KW'),
            array('KY'),
            array('KZ'),
            array('LA'),
            array('LB'),
            array('LC'),
            array('LI'),
            array('LK'),
            array('LR'),
            array('LS'),
            array('LT'),
            array('LU'),
            array('LV'),
            array('LY'),
            array('MA'),
            array('MC'),
            array('MD'),
            array('ME'),
            array('MF'),
            array('MG'),
            array('MH'),
            array('MK'),
            array('ML'),
            array('MM'),
            array('MN'),
            array('MO'),
            array('MP'),
            array('MQ'),
            array('MR'),
            array('MS'),
            array('MT'),
            array('MU'),
            array('MV'),
            array('MW'),
            array('MX'),
            array('MY'),
            array('MZ'),
            array('NA'),
            array('NC'),
            array('NE'),
            array('NF'),
            array('NG'),
            array('NI'),
            array('NL'),
            array('NO'),
            array('NP'),
            array('NR'),
            array('NU'),
            array('NZ'),
            array('OM'),
            array('PA'),
            array('PE'),
            array('PF'),
            array('PG'),
            array('PH'),
            array('PK'),
            array('PL'),
            array('PM'),
            array('PN'),
            array('PR'),
            array('PS'),
            array('PT'),
            array('PW'),
            array('PY'),
            array('QA'),
            array('RE'),
            array('RO'),
            array('RS'),
            array('RU'),
            array('RW'),
            array('SA'),
            array('SB'),
            array('SC'),
            array('SD'),
            array('SE'),
            array('SG'),
            array('SH'),
            array('SI'),
            array('SJ'),
            array('SK'),
            array('SL'),
            array('SM'),
            array('SN'),
            array('SO'),
            array('SR'),
            array('SS'),
            array('ST'),
            array('SV'),
            array('SX'),
            array('SY'),
            array('SZ'),
            array('TC'),
            array('TD'),
            array('TF'),
            array('TG'),
            array('TH'),
            array('TJ'),
            array('TK'),
            array('TL'),
            array('TM'),
            array('TN'),
            array('TO'),
            array('TR'),
            array('TT'),
            array('TV'),
            array('TW'),
            array('TZ'),
            array('UA'),
            array('UG'),
            array('UM'),
            array('US'),
            array('UY'),
            array('UZ'),
            array('VA'),
            array('VC'),
            array('VE'),
            array('VG'),
            array('VI'),
            array('VN'),
            array('VU'),
            array('WF'),
            array('WS'),
            array('YE'),
            array('YT'),
            array('ZA'),
            array('ZM'),
            array('ZW')
        );
    }

    public function providerForInvalidCountryCode()
    {
        return array(
            array('BC'),
            array(''),
            array('1'),
            array(1)
        );
    }

    /**
     * @dataProvider providerForValidCountryCode
     */
    public function testValidContryCodes($input)
    {
        $rule = new CountryCode();

        $this->assertTrue($rule->validate($input));
    }

    /**
     * @dataProvider providerForInvalidCountryCode
     */
    public function testInvalidContryCodes($input)
    {
        $rule = new CountryCode();

        $this->assertFalse($rule->validate($input));
    }
}
