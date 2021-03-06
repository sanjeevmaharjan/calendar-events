<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_cal_data extends CI_Migration
{

    public function up()
    {
        $field = array(
            'year' => array(
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'baisakh' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'jestha' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'ashar' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'shrawan' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'bhadra' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'ashwin' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'kartik' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'mangshir' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'poush' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'magh' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'falgun' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            ),
            'chaitra' => array(
                'type' => 'INT',
                'constraint' => '2',
                'unsigned' => TRUE
            )
        );
        
        $this->dbforge->add_field($field);
        $this->dbforge->add_field('CONSTRAINT chk_year CHECK (year >= 2000)');
        $this->dbforge->add_key('year', TRUE);
        $this->dbforge->create_table('cal_data');
        
        $nep_data = array(
            array(
                2000,
                30,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2001,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2002,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2003,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2004,
                30,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2005,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2006,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2007,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2008,
                31,
                31,
                31,
                32,
                31,
                31,
                29,
                30,
                30,
                29,
                29,
                31
            ),
            array(
                2009,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2010,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2011,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2012,
                31,
                31,
                31,
                32,
                31,
                31,
                29,
                30,
                30,
                29,
                30,
                30
            ),
            array(
                2013,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2014,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2015,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2016,
                31,
                31,
                31,
                32,
                31,
                31,
                29,
                30,
                30,
                29,
                30,
                30
            ),
            array(
                2017,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2018,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2019,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2020,
                31,
                31,
                31,
                32,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2021,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2022,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                30
            ),
            array(
                2023,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2024,
                31,
                31,
                31,
                32,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2025,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2026,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2027,
                30,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2028,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2029,
                31,
                31,
                32,
                31,
                32,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2030,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2031,
                30,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2032,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2033,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2034,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2035,
                30,
                32,
                31,
                32,
                31,
                31,
                29,
                30,
                30,
                29,
                29,
                31
            ),
            array(
                2036,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2037,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2038,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2039,
                31,
                31,
                31,
                32,
                31,
                31,
                29,
                30,
                30,
                29,
                30,
                30
            ),
            array(
                2040,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2041,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2042,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2043,
                31,
                31,
                31,
                32,
                31,
                31,
                29,
                30,
                30,
                29,
                30,
                30
            ),
            array(
                2044,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2045,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2046,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2047,
                31,
                31,
                31,
                32,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2048,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2049,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                30
            ),
            array(
                2050,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2051,
                31,
                31,
                31,
                32,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2052,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2053,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                30
            ),
            array(
                2054,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2055,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2056,
                31,
                31,
                32,
                31,
                32,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2057,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2058,
                30,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2059,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2060,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2061,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2062,
                30,
                32,
                31,
                32,
                31,
                31,
                29,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2063,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2064,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2065,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2066,
                31,
                31,
                31,
                32,
                31,
                31,
                29,
                30,
                30,
                29,
                29,
                31
            ),
            array(
                2067,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2068,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2069,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2070,
                31,
                31,
                31,
                32,
                31,
                31,
                29,
                30,
                30,
                29,
                30,
                30
            ),
            array(
                2071,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2072,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2073,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                31
            ),
            array(
                2074,
                31,
                31,
                31,
                32,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2075,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2076,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                30
            ),
            array(
                2077,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                29,
                31
            ),
            array(
                2078,
                31,
                31,
                31,
                32,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2079,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                29,
                30,
                29,
                30,
                30
            ),
            array(
                2080,
                31,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                29,
                30,
                30
            ),
            array(
                2081,
                31,
                31,
                32,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                30,
                30
            ),
            array(
                2082,
                30,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                30,
                30
            ),
            array(
                2083,
                31,
                31,
                32,
                31,
                31,
                30,
                30,
                30,
                29,
                30,
                30,
                30
            ),
            array(
                2084,
                31,
                31,
                32,
                31,
                31,
                30,
                30,
                30,
                29,
                30,
                30,
                30
            ),
            array(
                2085,
                31,
                32,
                31,
                32,
                30,
                31,
                30,
                30,
                29,
                30,
                30,
                30
            ),
            array(
                2086,
                30,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                30,
                30
            ),
            array(
                2087,
                31,
                31,
                32,
                31,
                31,
                31,
                30,
                30,
                29,
                30,
                30,
                30
            ),
            array(
                2088,
                30,
                31,
                32,
                32,
                30,
                31,
                30,
                30,
                29,
                30,
                30,
                30
            ),
            array(
                2089,
                30,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                30,
                30
            ),
            array(
                2090,
                30,
                32,
                31,
                32,
                31,
                30,
                30,
                30,
                29,
                30,
                30,
                30
            )
        );
        
        for ($i = 0; $i < 91; $i ++) {
            $data['year'] = $nep_data[$i][0];
            $data['baisakh'] = $nep_data[$i][1];
            $data['jestha'] = $nep_data[$i][2];
            $data['ashar'] = $nep_data[$i][3];
            $data['shrawan'] = $nep_data[$i][4];
            $data['bhadra'] = $nep_data[$i][5];
            $data['ashwin'] = $nep_data[$i][6];
            $data['kartik'] = $nep_data[$i][7];
            $data['mangshir'] = $nep_data[$i][8];
            $data['poush'] = $nep_data[$i][9];
            $data['magh'] = $nep_data[$i][10];
            $data['falgun'] = $nep_data[$i][11];
            $data['chaitra'] = $nep_data[$i][12];
            $this->db->insert('cal_data', $data);
        }
    }

    public function down()
    {
        $this->dbforge->drop_table('cal_data');
    }
}
