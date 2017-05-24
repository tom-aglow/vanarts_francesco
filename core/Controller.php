<?php

namespace core;

class Controller {
//    controller class

    private $settings;

    public function __construct () {
        // include settings from the file
        $this->settings = include_once __DIR__ . '/../settings.php';
    }

    public function render ($page) {
//        method for rendering whole page by its name

//        get additional content if the page is menu, wine list or gallery
        $menuList = ($page == 'menu' || $page == 'wine-list') ? $this->reformatMenuList($this->getListFromFile('menu', $page))  : '';
        $galleryList = ($page == 'gallery') ? $this->getListFromFile('gallery', $page)  : '';

//        get html code for the page content container
        $pageContent = System::buildTemplate($page . '.php', [
            'menuList' => $menuList,
            'galleryList' => $galleryList
        ]);

//        render the main template using content of the page
        $html = System::buildTemplate('main.php', [
            'pageTitle' => $this->settings[$page]['title'],
            'pageStyles' => $this->settings[$page]['styles'] ?? [],
            'pageScript' => $this->settings[$page]['script'] ?? [],
            'navActive' => [$page => 'active'],
            'pageContent' => $pageContent,
            'pageContentClass' => $page
        ]);

        echo $html;
    }

    private function getListFromFile ($file, $page) {
//        method for getting content of the external .csv file

        $row = 1;   // starting from the first row
        $list = [];     // array for output list

        if (($handle = fopen("assets/$file.csv", "r")) !== FALSE) {
//            get access to the file and read data from it
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                if ($row == 1 || $data[0] == $page) {
                    for ($c=0; $c < $num; $c++) {
                        if ($row < 2) {
                            // for first row write values in array
                            $list[$row][] = $data[$c];
                        } else {
                            // for next rows - use column titles as keys for associative array
                            $list[$row][$list[1][$c]] = $data[$c];
                        }
                    }
                }
                $row++;
            }
//            close connection to the file
            fclose($handle);
        }
//        delete first item from the array - doesn't have any important info for page content
        array_splice($list, 0, 1);

        return $list;
    }

    private function reformatMenuList ($menu) {
//        method for reformatting menu list - make it easier for using in page templates
        $newMenu = [];

        foreach ($menu as $item) {
            $newMenu[$item['subtype']][] = [
//                creating keys for dish name, description and price
                'name' => $item['name'],
                'desc' => $item['desc'],
                'price' => $item['price']
            ];
        }
        return $newMenu;
    }
}