<a href="?act=bai1"><button>Bài 1</button></a>
<a href="?act=bai2"><button>Bài 2</button></a>
<a href="?act=bai3"><button>Bài 3</button></a>
<a href="?act=bai4"><button>Bài 4</button></a>
<a href="?act=bai5"><button>Bài 5</button></a> <br>

<?php
if (isset($_GET['act']) && $_GET['act'] != '') {
    switch ($_GET['act']) {
        case 'bai1':
            include 'bai1.php';
            break;
        case 'bai2':
            include 'bai2.php';
            break;
        case 'bai3':
            include 'bai3.php';
            break;
        case 'bai4':
            include 'bai4.php';
            break;
        case 'bai5':
            include 'bai5.php';
            break;
    }
}

?>