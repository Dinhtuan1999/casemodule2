<?php
namespace App\Models;

class Foo {
    var $name;
    function setName($new_name) {
        $this->name = $new_name;
    }

    function getName() {
        return $this->name;
    }
}
?>
