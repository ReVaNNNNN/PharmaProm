	 	 	 	
I. [PHP] Write unit tests for function 'sum':

public function sum($a, $b)
{
    if (!is_int($a) || !is_int($b)) {
        throw new InvalidArgumentException();
    }
    return $a + $b;
}


II. [PHP] You have an array with n numbers from -10 to 10 (without 0). Implement function which returns quantity of pairs from the array which sum gives 0.

For example:
$input = array (3, 6, -3, 5, -10, 3, 10, 1, 7, -1, -9, -8, 7, 7, -7, -2, -7);
The right answer is 5 (pairs are bolded)


III. [PHP] Design 'Aquarium' class system with given requirements:
- we can put fish, turtles and plants in the aquarium
- fish, turtles and plants must breathe
- fish and turtles both must swim, but in a different ways
- functionality to send mail and sms after we add anything to our aquarium
- when light is on animals are swimming
- we can install different aquarium filters, which has different methods
- when we feed animals only hungry starts to eat
- fish and turtles respond to different food types
- heater can work in 3 different modes



IV. [SQL] Extract ALL books' titles with the number of rents in 2008 using SQL query.



V. [SQL] Using SQL query extract the list of users having excatly 3 defined attributes (i.e. with ID 1, 2, 4). Using only IDs from ‘system_user_has_attribute’ is good enough.


