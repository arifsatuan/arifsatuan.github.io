#include <Wire.h> // memasukan library i2c
#include <Adafruit_SSD1306.h> // memasukan library LCD OLED SSD1306
#define OLED_RESET 4
Adafruit_SSD1306 display(OLED_RESET);
int analogPin = A1;


void setup() { 
   display.begin(SSD1306_SWITCHCAPVCC, 0x3C);
   display.clearDisplay();
   pinMode(7, OUTPUT);
}
  
byte x;
void loop() {
  digitalWrite(7,HIGH);
  int analog = analogRead(analogPin);
  display.clearDisplay(); 
  display.setTextSize(1); 
  display.setTextColor(WHITE);
  display.setCursor(0,0); 
  display.println("Pengukuran Hmdty"); 
  

  display.setTextSize(1.5); 
    display.setCursor(14,14); 
  display.print("Hmdty : "); 
  display.print(analog); 
  display.display(); 

  delay(500); // jeda 1000 miliseconds

  if(analog >=200){
    digitalWrite(7,LOW);
    delay(10000);
  }


}