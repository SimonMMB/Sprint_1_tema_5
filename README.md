# Sprint_1_tema_5
POO 2

📄 EXERCISES DESCRIPTION

- Exercise 1: We need to create a data type that represents an animal. Animals have a name, but the sound of a dog’s “talk” is not the same as that of a cat’s. Therefore, we need to create other data types that help us program these behaviors. Basically, we want a makeSound() method that displays a different message if it is a dog (for example, “Boop, boop!”) or a cat (for example, “Mine!”).

💻 TECHNOLOGIES USED

- XAMPP package (PHP, Apache web server, MySQL database)
- Visual Studio Code
- Google chrome
- Git/Github

📋 REQUIREMENTS

Recomendation: display de execution of the code in console.

💡 NOTE

This exercise could be done either by declaring an abstract class or an interface. I chose to declare an abstract class for comprehensiveness reasons: the statement says that, in addition to a method for making a sound, "animals have a name". So I understood "name" as an attribute common to all animals, and interfaces cannot contain attributes. However, alternatively, the "interface solution" would be as follow:

1) Declaration of interface "Animal"

interface Animal {
    public function makeSound();
}

2) Declaration of class "Dog"

class Dog implements Animal {
    private $name;
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function getName() : string {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function makeSound() : string {
        return "¡Guau guau! \n";
    }
}

3) Declaration of class "Cat"

class Cat implements Animal {
    private $name;
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function getName() : string {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function makeSound() : string {
        return "¡Miau miau! \n";
    }
}

