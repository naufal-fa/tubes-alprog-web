namespace ArduinoSerialCS
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
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
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            panel1 = new Panel();
            lbl_conStats = new Label();
            btn_connect = new Button();
            label1 = new Label();
            label2 = new Label();
            tb_baudrate = new TextBox();
            tb_portName = new TextBox();
            panel1.SuspendLayout();
            SuspendLayout();
            // 
            // panel1
            // 
            panel1.Controls.Add(lbl_conStats);
            panel1.Controls.Add(btn_connect);
            panel1.Controls.Add(label1);
            panel1.Controls.Add(label2);
            panel1.Controls.Add(tb_baudrate);
            panel1.Controls.Add(tb_portName);
            panel1.Location = new Point(22, 39);
            panel1.Name = "panel1";
            panel1.Size = new Size(323, 262);
            panel1.TabIndex = 0;
            // 
            // lbl_conStats
            // 
            lbl_conStats.AutoSize = true;
            lbl_conStats.Location = new Point(100, 117);
            lbl_conStats.Name = "lbl_conStats";
            lbl_conStats.Size = new Size(119, 25);
            lbl_conStats.TabIndex = 1;
            lbl_conStats.Text = "Disconnected";
            lbl_conStats.Click += label3_Click;
            // 
            // btn_connect
            // 
            btn_connect.Location = new Point(36, 145);
            btn_connect.Name = "btn_connect";
            btn_connect.Size = new Size(254, 34);
            btn_connect.TabIndex = 2;
            btn_connect.Text = "CONNECT";
            btn_connect.UseVisualStyleBackColor = true;
            btn_connect.Click += button1_Click;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(36, 30);
            label1.Name = "label1";
            label1.Size = new Size(55, 25);
            label1.TabIndex = 1;
            label1.Text = "PORT";
            label1.Click += label1_Click;
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(36, 64);
            label2.Name = "label2";
            label2.Size = new Size(82, 25);
            label2.TabIndex = 2;
            label2.Text = "Baudrate";
            // 
            // tb_baudrate
            // 
            tb_baudrate.Location = new Point(140, 64);
            tb_baudrate.Name = "tb_baudrate";
            tb_baudrate.Size = new Size(150, 31);
            tb_baudrate.TabIndex = 3;
            // 
            // tb_portName
            // 
            tb_portName.Location = new Point(140, 27);
            tb_portName.Name = "tb_portName";
            tb_portName.Size = new Size(150, 31);
            tb_portName.TabIndex = 4;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(10F, 25F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(364, 314);
            Controls.Add(panel1);
            Name = "Form1";
            Text = "Form1";
            panel1.ResumeLayout(false);
            panel1.PerformLayout();
            ResumeLayout(false);
        }

        #endregion

        private Panel panel1;
        private Label label1;
        private Label label2;
        private TextBox tb_baudrate;
        private TextBox tb_portName;
        private Button btn_connect;
        private Label lbl_conStats;
    }
}
