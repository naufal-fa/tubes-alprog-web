#include <Grove_LED_Bar.h>

Grove_LED_Bar bar(3, 2, 0);

void setup() {
  bar.begin();
  bar.setGreenToRed(true);
}

void loop() {
  int value = analogRead(A0);
  value = map(value, 0, 500, 0, 10);
  bar.setLevel(value);
  delay(100);
}