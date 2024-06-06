#include <WiFi.h>
#include <HTTPClient.h>
#include <Arduino_JSON.h>
#include "DHT.h"

#define DHTPIN 4
#define DHTTYPE DHT11

DHT dht(DHTPIN, DHTTYPE);

const char* ssid = "Green House";
const char* password = "kamarmandi";
const char* server = "http://127.0.0.1:8000";

float temp;
int hum;
String url;

void setup() {
  Serial.begin(115200);
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);
  Serial.println();
  Serial.println("-------------");
  Serial.print("Connecting");

  // int connecting_process_timed_out = 20; //--> 20 = 20 seconds.
  // connecting_process_timed_out = connecting_process_timed_out * 2;
  // while (WiFi.status() != WL_CONNECTED) {
  //   Serial.print(".");
  //   if(connecting_process_timed_out > 0) connecting_process_timed_out--;
  //   if(connecting_process_timed_out == 0) {
  //     delay(1000);
  //     ESP.restart();
  //   }
  // }

  Serial.println();
  Serial.print("Successfully connected to : ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());
  Serial.println("-------------");

  dht.begin();
}

void loop() {
  // float temp = dht.readTemperature();
  // int hum = dht.readHumidity();

  // Serial.println("Suhu : " + String(temp));
  // Serial.println("Kelembapan : " + String(hum));
  // delay(1000);

  if(WiFi.status()== WL_CONNECTED) {
    HTTPClient http;
    temp = dht.readTemperature();
    hum = dht.readHumidity();

    url = "http://" + String(server) + "/tubes-web-alpro/sensor/dht/" + String(temp) + "/" + String(hum);
  
    // http.begin("http://REPLACE_WITH_YOUR_COMPUTER_IP_ADDRESS/REPLACE_WITH_PROJECT_FOLDER_NAME_IN_htdocs_FOLDER/updateDHT11data_and_recordtable.php");  //--> Specify request destination
    // http.end();  //Close connection
    Serial.println(url);
    Serial.println("---------------");
    
    delay(4000);
  }

}