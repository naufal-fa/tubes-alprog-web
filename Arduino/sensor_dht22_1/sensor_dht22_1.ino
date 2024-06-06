#include "DHT.h"
#include <MQ2.h>
#define DHTPIN 14
#define DHTTYPE DHT22
DHT dht(DHTPIN, DHTTYPE);

//change this with the pin that you use
int mq2Pin = 25;
int lpg, co;
uint16_t dataSensor1, dataSensor2;
MQ2 mq2(mq2Pin);

void setup() {
  Serial.begin(115200);
  dht.begin();
  mq2.begin();
}

void loop() {
  float temp = dht.readTemperature();
  // int hum = dht.readHumidity();

  // float* values= mq2.read(true);
  // lpg = values[0];
  // lpg = mq2.readLPG();
  // co = values[1];
  // co = mq2.readCO();
  //smoke = values[2];
  // smoke = mq2.readSmoke();

  // Serial.println(temp);
  // Serial.println(co);
  // Serial.println(readSensor());

  dataSensor1 = temp;
  dataSensor2 = readSensor();

  Serial.print((String) dataSensor1 + "A" + dataSensor2 + "B" + "\n");
  delay(1000);

}

//  This function returns the analog data to calling function
int readSensor() {
  unsigned int sensorValue = analogRead(mq2Pin);  // Read the analog value from sensor
  unsigned int outputValue = map(sensorValue, 0, 1023, 0, 255); // map the 10-bit data to 8-bit data
  return outputValue; // Return analog moisture value
}