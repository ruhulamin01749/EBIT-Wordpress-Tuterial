<?php 

    get_header();
     $sorter_option = $office_master['sorter_option']['Active'];

     if(is_array($sorter_option)){

        foreach ($sorter_option as $key => $value) {
                switch ($key) {
                    case 'Slider';
                       get_template_part('section_slider');
                        break;
                    case 'Services';
                       get_template_part('section_services');
                        break;
                    case 'Red';
                       get_template_part('section_red');
                        break;
                    case 'Green';
                       get_template_part('section_green');
                       break;
                    case 'Blue';
                       get_template_part('section_blue');
                        break;
                }
        }

     }

   get_footer(); 

?>