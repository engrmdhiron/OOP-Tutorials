<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color:blue; text-align:center;"><u>Interface</u>
    <br>
    <a href="index.php"><button>Back to Index</button></a></h1>
    <p>Interfaces are defined to provide a common function names to the implementers. Different implementors can implement those interfaces according to their requirements. You can say, interfaces are skeletons which are implemented by developers.</p>
    <blockquote>
    <pre>
        <code>
        interface school{
            public function mySchool();
        }

        interface collage{
            public function myCollage();
        }

        class Students {

            public function student($name, $age){
                echo "My name is : ".$name.' and age is : '.$sage;
            }
        }

        class Teacher extends Students implements school, collage{

            // public function __construct(){
            //     $this->mySchool();
            // }
            public function student($name, $age, $mobile=false){
                echo "My name is ".$name.' , age is '.$age.' and mobile number is '.$mobile;
            }
            
            public function mySchool(){
                echo "My School is Chautpur High School";
            }

            public function myCollage(){
                echo "My collage is Infra Polytechnic Institute";
            }
        }

        $name = 'Md Hiron Mollik (sagor)';
        $age = 27;
        $mobile = '01671909000';

        $teacher = new Teacher;
        $teacher->student($name, $age, $mobile);
        $teacher->mySchool();
        $teacher->myCollage();
        </code>
        </pre>
    </blockquote>
    <?php 
    interface school{
        public function mySchool();
    }

    interface collage{
        public function myCollage();
    }

    class Students {

        public function student($name, $age){
            echo "My name is : ".$name.' and age is : '.$sage;
        }
    }

    class Teacher extends Students implements school, collage{

        // public function __construct(){
        //     $this->mySchool();
        // }
        public function student($name, $age, $mobile=false){
            echo "My name is ".$name.' , age is '.$age.' and mobile number is '.$mobile.'<br>';
        }
        
        public function mySchool(){
            echo "My School is Chautpur High School <br>";
        }

        public function myCollage(){
            echo "My collage is Infra Polytechnic Institute";
        }
    }

    $name = 'Md Hiron Mollik (sagor)';
    $age = 27;
    $mobile = '01671909000';

    $teacher = new Teacher;
    $teacher->student($name, $age, $mobile);
    $teacher->mySchool();
    $teacher->myCollage();
?>
</body>
</html>
