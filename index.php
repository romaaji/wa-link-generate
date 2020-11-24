
<html lang="en"><head>


<!-- Primary Meta Tags -->
<title>WhatsApp Message Link Generated</title>
<meta name="description" content="Tool Yang Dapat Memudahkan Pengguna Generated Pesan Ke Nomor Tujuan Dengan Mudah Dan Efisien Secara Cepat">

<!-- Twitter Meta Tags -->
<meta property="twitter:image" content="wa.png">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="undefined">
<meta property="twitter:title" content="WhatsApp Message Link Generated">
<meta property="twitter:description" content="Tool Yang Dapat Memudahkan Pengguna Generated Pesan Ke Nomor Tujuan Dengan Mudah Dan Efisien Secara Cepat">

<!-- Open Graph Meta Tags -->
<meta property="type" content="website">
<meta property="image" content="wa.png">
<meta property="url" content="undefined">
<meta property="title" content="WhatsApp Message Link Generated">
<meta property="description" content="Tool Yang Dapat Memudahkan Pengguna Generated Pesan Ke Nomor Tujuan Dengan Mudah Dan Efisien Secara Cepat">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">
    <div id="app">

        <div class="container card">
          <div class="row">
            <div class="col-sm-12">
              <center>
              <img src="wa.png" width="200px">
              <h1>Generate a WhatsApp link</h1>              
            </div>
          </div>
          <div class="row">
      
            <div class="col-sm-12">
      
              <div class="form-group">
                <label for="exampleInputEmail1">Your telephone number</label>
                <input type="number" v-model="number" class="form-control" id="telephone" aria-describedby="numberHelp" placeholder="Enter your telephone">
                <small id="numberHelp" class="form-text text-muted">Enter your telephone number 6281234567891 or 6281234567891</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">A pre-filled message that will automatically appear in the text field of the chat <span class="small">(optional)</span></label>
                <input type="message" v-model="message" class="form-control" id="message" placeholder="I would like to request a quote" describedby="messageHelp">
                <small id="messageHelp" class="form-text text-muted">Enter your message</small>
              </div>
      
              <button type="submit" class="btn btn-primary" id="generate-url" :disabled="number == ''" @click="generateUrl">Generate WhatsApp Link</button>
            </div>
            <div class="col-sm-12">
              <br>
              <h4>Your URL and QR code <span v-if="whatsappurl == ''">will show below once you fill ut the form and press generate</span></h4>
              <pre id="generated-url" v-if="whatsappurl !== ''">{{whatsappurl}}</pre>
              <br>
              <div id="qr-code">
              </div>
              
              <p class="small">To findout more about how this works see this link from the <a href="https://faq.whatsapp.com/en/android/26000030/">Whatsapp API</a></p>
              <a href="https://github.com/romaaji" class="text-right btn btn-primary">Github</a>
            </div>
          </div>
        </div>
      </div>
    </center>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
  
      <script id="rendered-js" src="src/index.js"></script>

  


 
</body></html>