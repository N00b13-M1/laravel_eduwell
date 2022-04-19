//The setup fucntion runs once when you proess reset or power the board

#include <LiquidCrystal.h>
#include <SD.h>

void setup() {
    //initialize digital pin LED_BUILTIN as an output
    pinMode(LED_BUILTIN, OUTPUT);

}

void loop() {
    digitalWrite(LED_BUILTIN, HIGH);//turn the LED on (HIGH IS THE VOLTAGE LEVEL)
    delay(1000);                    // wait for a second
    digitalWrite(LED_BUILTIN, LOW); //turn the LED off by making the voltage low
    delay(1000);                    // wait for a second
}







//red wire = positive
//black wire = negative

//connect negative end of LED (straight) to resistance
//positive end of led (curved) connect to positive end battery

//1. Don't conntact any voltage higher than 5V on any I/O pin (higher than 5 V only to V IN pin)
//2. Don't connect 5V to ground pin
//3. Take care of polarity, don't connect + pin to - pin (will damage device)
//4. Don't connect any voltage about 12V, use DC or USB

//Sensors - Vision/touch/hearing/smell/taste


// Input devices
// Rotatory potentionmeter: detects change in resistance based on turning the knob
// push button: close or open the circuit
// force sensing resistor: Change in resistance based on force applied to it
// light depending resistor: Change in resistance based on light exposed to it
// triple axis acceleromater: detects orientation of an object
// joystick: input device
// microphone/touch sensor/temp & humidity sensor/ etc

// Output devices

// LED, buzzer, speaker, OLED/LCD display, motor

// Analog = colors, temperature, flavors, sound we experience, sine wave (x = time, y = volt)
// Digital = either ON or OFF

// Signals are used to convey information

// analog signal: controller arcade game

//pinMode (2arguments) -> pinMode(LED_BUILTIN*, OUTPUT);
//configures the specified pin either as a input or output
//LED_BUILTIN -> connected to pin 13 for Arduino

//* Can also be other pin

// int ledPin=13;

// void setup() {
//     pinMode(ledPin, OUTPUT);
// }

// Functions

//     Serial.begin(9600);
//     Serial.print();
//     Serial.println(); (just adds an additional line);

// Post & pre increment or decrement

// Example 1

// int myVar = 6;
// void setup(){
//     Serial.begin(57600);
//     myVar--;
//     Serial.println(myVar);
// }

// Result --> myVar:5

// Example 2 Post-increment

// int myVar = 6;
// void setup(){
//     Serial.begin(57600);

//     Serial.println(myVar++);
// }

// Result --> myVar:6

// Example 3 Pre-increment

// int myVar = 6;
// void setup(){
//     Serial.begin(57600);

//     Serial.println(++myVar);
// }

// Result --> myVar:7

// Boolean

// Please note that 1, HIGH and true are considered the same by the IDE
// Please note that 0, LOW and false are considered the same by the IDE
// anything else than 0 is also considered as true

// bool myBool = 78

// void setup(){
//     Serial.println(myBool)
// }

// Result --> 1 -> true

// Byte (0 thru 255)

//     byte x = 158;
//     byte y;

// byte myByteVar = 78

// void setup(){
//     Serial.println(myByteVar)
// }

// Result --> 78

// Char (can hold a single charachter, which actually equals a number ASCII table)
//     char x = 'a';
//     char y;

// byte myChar = 'A';

// void setup(){
//     Serial.println(myChar+1)  //Result: 66 
// }

//Variable scope (global & local)

Global variable -> above void setup() ->accessible in all functions void setup & void loop

//Qualifiers (constant & static)

//Constant qualifier = when we don't want the variable value to change

//#define pi = 3.14 //hash defined, doesn\'t use any memory 


Example 1

int xyz = 0;

void setup(){
    Serial.begin(57600);
}

void loop(){
    xyz++
    Serial.println(xyz);

    delay(500);
}

Static --> 

Example 2 Static -> will initialize to zero but not reset everytime

void setup(){
    Serial.begin(57600);
}

void loop(){
    static int xyz = 0;
    xyz++;
    Serial.println(xyz);

}

Result --> 1,2,3,4,5, etc

//Logical operators

    //and operator: &&
    //or operator: || (True or true -> true)
    //not operator: !

//Control structures

//Entry -> Action1 -> Action2 -> Action3

//1. if statement

if (/* condition */)
{
    /* code */
}
else if (/* condition */)
{
    /* code */
}
else
{
    /* code */
}

//Loops

For loop, when an action has to be executed a defined number of times

for (initialization; condition; update){
    //statements
}



for (int i=0; i<=20; i++){
    Serial.println("I\'m sorry I broke the blackboard");
}

for(int i =0; i<-5, i++){
    for(int j = 0; j < i; j++){
        Serial.print("*");
    }
    Serial.println();
}

//While loop, undefined repeat as long as condition is fulfilled

while (/* condition */)
{
    /* code */
}




// break is used to exit from a for, while or do while loop, 
//bypassing the normal loop condition

void setup(){
Serial.begin(57600);
    for(int i = 0;  i<=10; i++){

        if(i==5){
            break;
        }
        Serial.println(i);

    }
}

Result --> 1,2,3,4

//continue statement skips the rest of the current iteration of a loop.
//It continues by checking the conditional expression of the loop, and proceeding 
//with any subsequent iterations

void setup(){
Serial.begin(57600);
    for(int i = 0;  i<=10; i++){

        if(i==5){
            continue;
        }
        Serial.println(i);
    }
}


Result --> 1,2,3,4,6,7,8,9,10

//Return all code after retrn will no execute

//Switch

//Range 
    // case 21 ... 30:
            //Serial.println("test");
            //break;

//Array 
    int myArray [5] = {1,2,3,4,5};


//3-dimensional arrays

//String


void setup(){
    Serial.begin(57600);
    Serual.printnl("This is my string");

    char Str2[5] = {'b', 'i', 'k', 'i'}; // add one digit more to indicate null value after character i
    Serial.printnl(Str2);
    char Str3[5] = {'b', 'i', 'k', 'i', '\0'}; //explicatetely declare null character
    Serial.printnl(Str3);
    char Str4[] = "bike"; //will automatically 5 characters to this
    Serial.printnl(Str4);
    char Str5[5] = "bike"; 
    Serial.printnl(Str5);

    char Str6[15] = "bike";
    // also okay to allocate a bigger size to a smaller word.
    Serial.printnl(Str6);

    char Str[2] = "bike";
    // will only depict b & i

    String Str7 = "bike";
    Serial.println(Str7);
    Serial.println(Str7.charAt(0));
    
}

//Functions

void setup(){
    pinMode(LED_BUILTIN, OUTPUT);
}

void myBlinkFunction(){
    digitalWrite(LED_BUILTIN, HIGH);
    delay(1000);
    digitalWrite(LED_BUILTIN, LOW);
    delay(1000);
}

void loop(){
    myBlinkFunction();
}

//Example 2

int led1 = 9;
int led2 = 7;
int led3 = 2;

void setup(){
    pinMode(led1, OUTPUT);
    pinMode(led2, OUTPUT);
    pinMode(led3, OUTPUT);
}

void loop(){
    myCustomLED(led1);
    myCustomLED(led2);
    myCustomLED(led3);
}

void myCustomLED(int pin){
    digitalWrite(pin , HIGH);
    delay(1000);
    digitalWrite(pin, LOW);
    delay(1000);
}

//Example 3

void setup(){
    Serial.begin(57600);
}

void loop(){
    int d = sum(7,8,9);
    Serial.println(d);
    int e = sum(1,2,3);
    Serial.println(e);
    Serial.println(sum(4,5,6));


    Serial.println(isTall(123));
}

int sum(int a, int b, int c){
    return a + b + c;
}

bool isTall(int height){
    if (height>100){
        return true;
    }
    else {
        return false;
    }
}

//Digital input & output

//digitalWrite* (pin**, state***);

//*name of function
//**pin number
//***state of pin, value of high or low

//digitalRead(pin);

//analogRead(pin);

//analogWrite(pin, value);

//pin Number 3,5,6,9,10,11 -> operate 490 Hz, 5&6 980 Hz
//value -> 0 to 255

//analogWrite -> control brightness of an LED or speed of a motor

//Square wave -> either on or off

//Pulse Width Modulation --> time a signal is on

//Libraries


