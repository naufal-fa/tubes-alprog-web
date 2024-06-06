using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;
using MySql.Data.MySqlClient;

namespace ArduinoSerialPort
{
    public partial class Form1 : Form
    {
        //SqlConnection connection = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=""C:\Users\ASUS\Documents\Kuliah\Algoritma & Pemrograman - Semester 2\tubes-alpro-web\Arduino\ArduinoSerialPort\ArduinoSerialPort\LocalDatabase.mdf"";Integrated Security=True");
        string getData;
        sbyte indexOfA, indexOfB;
        string dataSensor1, dataSensor2;
        MySqlConnection connection = new MySqlConnection("server=localhost;user=root;database=database_tubes_alpro;password=");

        public Form1()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void btn_connect_Click(object sender, EventArgs e)
        {
            if (btn_connect.Text == "CONNECT")
            {
                try
                {
                    arduinoSerialPort.PortName = tb_portName.Text;
                    arduinoSerialPort.BaudRate = Convert.ToInt32(tb_baudrate.Text);
                    arduinoSerialPort.Open();

                    if (arduinoSerialPort.IsOpen)
                    {
                        lbl_conStats.Text = "Connected";
                        btn_connect.Text = "DISCONNECT";
                    }
                }
                catch (Exception ex)
                {
                    MessageBox.Show(Convert.ToString(ex));
                }
            }
            else
            {
                if (arduinoSerialPort.IsOpen)
                {
                    arduinoSerialPort.Close();
                    lbl_conStats.Text = "Disconnected";
                    btn_connect.Text = "CONNECT";
                }
            }
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            foreach (string port in System.IO.Ports.SerialPort.GetPortNames())
            {
                tb_portName.Text = port;
            }
        }

        private void arduinoSerialPort_DataReceived(object sender, System.IO.Ports.SerialDataReceivedEventArgs e)
        {
            getData = arduinoSerialPort.ReadLine();
            // this.Invoke(new EventHandler(updateData));
            this.BeginInvoke(new EventHandler(ProcessData));
        }

        private void updateData(object sender, EventArgs e)
        {
            string data = getData;
            // tb_dataReceive.Text = data;
            // this.BeginInvoke(new MethodInvoker(ProcessData));
        }

        private void ProcessData(object sener, EventArgs e)
        {
            try
            {
                indexOfA = Convert.ToSByte(getData.IndexOf("A"));
                indexOfB = Convert.ToSByte(getData.IndexOf("B"));

                dataSensor1 = getData.Substring(0, indexOfA);
                dataSensor2 = getData.Substring(indexOfA + 1, (indexOfB - indexOfA) - 1);

                tb_dataSensor1.Text = dataSensor1;
                tb_dataSensor2.Text = dataSensor2;
            }
            catch (Exception ex) { }
        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            //connection.Open();
            //SqlCommand cmd = connection.CreateCommand();
            //cmd.CommandType = CommandType.Text;
            //cmd.CommandText = "insert into [Sensor] (humidity) values ('"+tb_dataReceive.Text+"')";
            //cmd.ExecuteNonQuery();
            //connection.Close();

            MySqlCommand cmd;
            connection.Open();
            cmd = connection.CreateCommand();
            cmd.CommandText = "INSERT INTO sensors(sensor_name, value1, value2) VALUE(@sensor_name, @value1, @value2)";
            cmd.Parameters.AddWithValue("@sensor_name", "uji_coba");
            cmd.Parameters.AddWithValue("@value1", tb_dataSensor1.Text);
            cmd.Parameters.AddWithValue("@value2", tb_dataSensor2.Text);
            cmd.ExecuteNonQuery();
            connection.Close();
        }
    }
}
