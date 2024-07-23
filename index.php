In JavaScript - Math.random():

const names = ["alice", "bob", "charley"]
// call these lines from a button or something
key = Math.floor(Math.random() * names.length);
return names[key]


In php - array_rand randomizes an array, the second parameter pops first element:

$names=array("alice","bob","charley");
$key=array_rand($names,1);
echo $names[$key];
In python, it couldn’t be simpler:

name = random.choice(“alice”, “bob”, “charley”)

https://stackoverflow.com/questions/28688442/how-to-generate-random-name-of-person-using-php