<section class="container_fluid services">
  <div class="row">
    <div class="services_wrap">
      <div>
        <h1> Naše storitve </h1>
      </div>
      <div class="about_line"></div>
      <div>
          <div>Podjetje ponuja ves <strong>gozdarski asortiman storitev</strong>. Smo izkušena in utečena ekipa s kilometrino in smo kos tudi največjim izzivom. Naše vodilo so zadovoljne stranke, ker nam je mar za drevesa in dajemo prednost <strong>kvaliteti ter varni izvedbi del.</strong> Zanesljivost jemljemo resno – naša dejavnost je v celoti zavarovana.</div>
        </div>
      </div>
    </div>
    <div class="row p-0">

      @include('components.card' , ['img' => '/resources/images/podiranje1.jpg'], ['title' => 'PODIRANJE DREVES'], ['text' => 'Podiranje glede na zahtevnost izvajamo klasično, po sekcijah z vrvno tehniko, z dvižno košaro ali avtodvigalom.'])
      @include('components.card' , ['title' => 'OBREZOVANJE DREVES'], ['text' => 'Z obrezovanjem poskrbimo, da bodo krošnje vaših dreves urejene in varne, brez suhih vej, razredčene in odmaknjene od lastnine.'])
      @include('components.card' , ['title' => 'REZANJE ŽIVIH MEJ IN OBLIKOVANJE'], ['text' => 'Redna negovalna rez je ključna za lep izgled vaših grmovnic.'])
      @include('components.card' , ['title' => 'POVEZAVA KROŠENJ'], ['text' => 'Včasih drevo tvori več vrhov, spoji le teh pa so praviloma slabi. Pri večjih drevesih je zato smiselno povezati krošnjo s posebnim sistemom z namenom ohranjanja drevesa in zagotavljanja varnosti.'])
      @include('components.card' , ['title' => 'ČIŠČENJE BREŽIN'], ['text' => 'Zaraščene površine in brežine zmanjšujejo preglednost in varnost v cestnem prometu. Ureditev takšnih površin je odgovorna odločitev.'])
      @include('components.card' , ['title' => 'SAJENJE DREVES'], ['text' => 'Predlagamo, dobavimo in posadimo drevje po vaših željah.'])
      @include('components.card' , ['title' => 'RAZREZ HLODOVINE'], ['text' => 'V kolikor želite koristno uporabiti vaš les, lahko izvedemo razrez hlodovine na licu mesta po vaših željah. To je še posebej priročno, kadar do lesa ni mogoče dostopati z mehanizacijo.'])
      @include('components.card' , ['title' => 'ODVOZ'], ['text' => 'Vse veje in nažagan material po končanem delu pospravimo in odpeljemo.'])

    </div>
  </div>
</section>
