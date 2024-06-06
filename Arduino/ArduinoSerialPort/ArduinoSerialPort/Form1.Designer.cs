namespace ArduinoSerialPort
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            this.panel1 = new System.Windows.Forms.Panel();
            this.button1 = new System.Windows.Forms.Button();
            this.tb_dataSensor1 = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.tb_baudrate = new System.Windows.Forms.TextBox();
            this.tb_portName = new System.Windows.Forms.TextBox();
            this.btn_connect = new System.Windows.Forms.Button();
            this.lbl_conStats = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.arduinoSerialPort = new System.IO.Ports.SerialPort(this.components);
            this.label4 = new System.Windows.Forms.Label();
            this.tb_dataSensor2 = new System.Windows.Forms.TextBox();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.tb_dataSensor2);
            this.panel1.Controls.Add(this.label4);
            this.panel1.Controls.Add(this.button1);
            this.panel1.Controls.Add(this.tb_dataSensor1);
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.tb_baudrate);
            this.panel1.Controls.Add(this.tb_portName);
            this.panel1.Controls.Add(this.btn_connect);
            this.panel1.Controls.Add(this.lbl_conStats);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Controls.Add(this.label1);
            this.panel1.Location = new System.Drawing.Point(12, 12);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(290, 405);
            this.panel1.TabIndex = 0;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(28, 346);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(230, 41);
            this.button1.TabIndex = 6;
            this.button1.Text = "Upload to database";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // tb_dataSensor1
            // 
            this.tb_dataSensor1.Location = new System.Drawing.Point(123, 219);
            this.tb_dataSensor1.Name = "tb_dataSensor1";
            this.tb_dataSensor1.Size = new System.Drawing.Size(135, 26);
            this.tb_dataSensor1.TabIndex = 5;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(39, 219);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(60, 20);
            this.label3.TabIndex = 4;
            this.label3.Text = "DHT22";
            this.label3.Click += new System.EventHandler(this.label3_Click);
            // 
            // tb_baudrate
            // 
            this.tb_baudrate.Location = new System.Drawing.Point(111, 78);
            this.tb_baudrate.Name = "tb_baudrate";
            this.tb_baudrate.Size = new System.Drawing.Size(147, 26);
            this.tb_baudrate.TabIndex = 3;
            // 
            // tb_portName
            // 
            this.tb_portName.Location = new System.Drawing.Point(111, 43);
            this.tb_portName.Name = "tb_portName";
            this.tb_portName.Size = new System.Drawing.Size(147, 26);
            this.tb_portName.TabIndex = 1;
            // 
            // btn_connect
            // 
            this.btn_connect.Location = new System.Drawing.Point(28, 158);
            this.btn_connect.Name = "btn_connect";
            this.btn_connect.Size = new System.Drawing.Size(230, 41);
            this.btn_connect.TabIndex = 2;
            this.btn_connect.Text = "CONNECT";
            this.btn_connect.UseVisualStyleBackColor = true;
            this.btn_connect.Click += new System.EventHandler(this.btn_connect_Click);
            // 
            // lbl_conStats
            // 
            this.lbl_conStats.AutoSize = true;
            this.lbl_conStats.Location = new System.Drawing.Point(90, 135);
            this.lbl_conStats.Name = "lbl_conStats";
            this.lbl_conStats.Size = new System.Drawing.Size(107, 20);
            this.lbl_conStats.TabIndex = 1;
            this.lbl_conStats.Text = "Disconnected";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(24, 78);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(75, 20);
            this.label2.TabIndex = 1;
            this.label2.Text = "Baudrate";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(24, 43);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(52, 20);
            this.label1.TabIndex = 0;
            this.label1.Text = "PORT";
            this.label1.Click += new System.EventHandler(this.label1_Click);
            // 
            // arduinoSerialPort
            // 
            this.arduinoSerialPort.DataReceived += new System.IO.Ports.SerialDataReceivedEventHandler(this.arduinoSerialPort_DataReceived);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(39, 262);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(48, 20);
            this.label4.TabIndex = 7;
            this.label4.Text = "MQ-2";
            // 
            // tb_dataSensor2
            // 
            this.tb_dataSensor2.Location = new System.Drawing.Point(123, 256);
            this.tb_dataSensor2.Name = "tb_dataSensor2";
            this.tb_dataSensor2.Size = new System.Drawing.Size(135, 26);
            this.tb_dataSensor2.TabIndex = 8;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(9F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(321, 448);
            this.Controls.Add(this.panel1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox tb_baudrate;
        private System.Windows.Forms.TextBox tb_portName;
        private System.Windows.Forms.Button btn_connect;
        private System.Windows.Forms.Label lbl_conStats;
        private System.IO.Ports.SerialPort arduinoSerialPort;
        private System.Windows.Forms.TextBox tb_dataSensor1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.TextBox tb_dataSensor2;
        private System.Windows.Forms.Label label4;
    }
}

