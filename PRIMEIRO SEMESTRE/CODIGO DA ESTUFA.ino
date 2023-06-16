#include <LiquidCrystal.h>

LiquidCrystal lcd(7, 6, 5, 4, 3, 2);
int umidade = 0;
int pinHigrometro = A0;
int pinHigrPwr = 8;
int pinLedR = 9;
int pinLedY = 10;
int pinLedG = 11;
int pinRele = 12;
int leitura;

void setup(){
  lcd.begin(16,2);
  pinMode(pinHigrPwr, OUTPUT);
  pinMode(pinLedR, OUTPUT);
  pinMode(pinLedY, OUTPUT);
  pinMode(pinLedG, OUTPUT);
  pinMode(pinRele, OUTPUT);
  digitalWrite(pinLedR, LOW);
  digitalWrite(pinLedY, LOW);
  digitalWrite(pinLedG, LOW);
  digitalWrite(pinHigrPwr, LOW);
  digitalWrite(pinRele, LOW);
}

void loop(){
  leitura = lerUmidade();
  lcd.setCursor(0,0);
  lcd.print("Umidade do Solo:");
  lcd.setCursor(6,1);
  lcd.print(leitura);
  delay(200);
  
  if(leitura == 0){
  	lcd.setCursor(6,1);
    lcd.print("000");
  }
  if(leitura < 300){
    digitalWrite(pinRele, HIGH);
  	digitalWrite(pinLedR, HIGH);
    digitalWrite(pinLedY, LOW);
    digitalWrite(pinLedG, LOW);
  } else if(leitura >= 300 && leitura <= 700){
    digitalWrite(pinLedY, HIGH);
    digitalWrite(pinLedR, LOW);
    digitalWrite(pinLedG, LOW);
  } else if(leitura > 700){
    digitalWrite(pinRele, LOW);
    digitalWrite(pinLedG, HIGH);
    digitalWrite(pinLedR, LOW);
    digitalWrite(pinLedY, LOW);
  }
}

int lerUmidade(){
    digitalWrite(pinHigrPwr, HIGH);
    delay(100);
    umidade = analogRead(pinHigrometro);
    //digitalWrite(pinHigrPwr, LOW);
    return umidade;
}