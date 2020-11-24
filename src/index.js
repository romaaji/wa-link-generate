var app = new Vue({
    el: '#app',
    data: {
      number: '',
      message: '',
      whatsappurl:''
    },
    methods:{
      generateUrl: function(){
        if(this.message){
          this.whatsappurl = "https://api.whatsapp.com/send?phone="+this.number+"&text="+this.message
        }else{
          this.whatsappurl = "https://api.whatsapp.com/send?phone="+this.number
        }
        
        $('#qr-code').qrcode(this.whatsappurl);
      }
    }
    
  })