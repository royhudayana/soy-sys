//ID3 Decision Tree Algorithm


//main algorithm and prediction functions

var id3 = function(_s,target,features){
    var targets = _.unique(_s.pluck(target));
    if (targets.length == 1){
	console.log("end node! "+targets[0]);
	return {type:"result", val: targets[0], name: targets[0],alias:targets[0]+randomTag() };
    }
    if(features.length == 0){
	console.log("returning the most dominate feature!!!");
	var topTarget = mostCommon(_s.pluck(target));
	return {type:"result", val: topTarget, name: topTarget, alias: topTarget+randomTag()};
    }
    var bestFeature = maxGain(_s,target,features);
    var remainingFeatures = _.without(features,bestFeature);
    var possibleValues = _.unique(_s.pluck(bestFeature));
    console.log("node for "+bestFeature);
    var node = {name: bestFeature,alias: bestFeature+randomTag()};
    node.type = "feature";
    node.vals = _.map(possibleValues,function(v){
	console.log("creating a branch for "+v);
	var _newS = _(_s.filter(function(x) {return x[bestFeature] == v}));
	var child_node = {name:v,alias:v+randomTag(),type: "feature_value"};
	child_node.child =  id3(_newS,target,remainingFeatures);
	return child_node;

    });
    return node;
}

var predict = function(id3Model,sample) {
    var root = id3Model;
    while(root.type != "result"){
	var attr = root.name;
	var sampleVal = sample[attr];
	var childNode = _.detect(root.vals,function(x){return x.name == sampleVal});
	root = childNode.child;
    }
    return root.val;
}



//necessary math functions

var entropy = function(vals){
    var uniqueVals = _.unique(vals);
    var probs = uniqueVals.map(function(x){return prob(x,vals)});
    var logVals = probs.map(function(p){return -p*log2(p) });
    return logVals.reduce(function(a,b){return a+b},0);
}

var gain = function(_s,target,feature){
    var attrVals = _.unique(_s.pluck(feature));
    var setEntropy = entropy(_s.pluck(target));
    var setSize = _s.size();
    var entropies = attrVals.map(function(n){
	var subset = _s.filter(function(x){return x[feature] === n});
	return (subset.length/setSize)*entropy(_.pluck(subset,target));
    });
    var sumOfEntropies =  entropies.reduce(function(a,b){return a+b},0);
    return setEntropy - sumOfEntropies;
}

var maxGain = function(_s,target,features){
    return _.max(features,function(e){return gain(_s,target,e)});
}

var prob = function(val,vals){
    var instances = _.filter(vals,function(x) {return x === val}).length;
    var total = vals.length;
    return instances/total;
}

var log2 = function(n){
    return Math.log(n)/Math.log(2);
}


var mostCommon = function(l){
   return  _.sortBy(l,function(a){
	return count(a,l);
    }).reverse()[0];
}

var count = function(a,l){
    return _.filter(l,function(b) { return b === a}).length
}

var randomTag = function(){
    return "_r"+Math.round(Math.random()*1000000).toString();
}

//Display logic

var drawGraph = function(id3Model,divId){
    var g = new Array();
    g = addEdges(id3Model,g).reverse();
    window.g = g;
    var data = google.visualization.arrayToDataTable(g.concat(g));
    var chart = new google.visualization.OrgChart(document.getElementById(divId));
    google.visualization.events.addListener(chart, 'ready',function(){
    _.each($('.google-visualization-orgchart-node'),function(x){
	var oldVal = $(x).html();
	if(oldVal){
	    var cleanVal = oldVal.replace(/_r[0-9]+/,'');
	    $(x).html(cleanVal);
	}
});
    });
    chart.draw(data, {allowHtml: true});

}

var addEdges = function(node,g){
    if(node.type == 'feature'){
	_.each(node.vals,function(m){
	    g.push([m.alias,node.alias,'']);
	    g = addEdges(m,g);
	});
	return g;
    }
    if(node.type == 'feature_value'){

	g.push([node.child.alias,node.alias,'']);
	if(node.child.type != 'result'){
	    g = addEdges(node.child,g);
	}
	return g;
    }
    return g;
}


var renderSamples = function(samples,$el,model,target,features){
    _.each(samples,function(s){
	var features_for_sample = _.map(features,function(x){return s[x]});
	$el.append("<tr><td>"+features_for_sample.join('</td><td>')+"</td><td><b>"+predict(model,s)+"</b></td><td>actual: "+s[target]+"</td></tr>");
    })
}

var renderTrainingData = function(_training,$el,target,features){
    _training.each(function(s){
	$el.append("<tr><td>"+_.map(features,function(x){return s[x]}).join('</td><td>')+"</td><td>"+s[target]+"</td></tr>");
    })
}

var calcError = function(samples,model,target){
    var total = 0;
    var correct = 0;
    _.each(samples,function(s){
	total++;
	var pred = predict(model,s);
	var actual = s[target];
	if(pred == actual){
	    correct++;
	}
    });
    return correct/total;
}

var prediksi = function(samples,$el,model,target,features){
    _.each(samples,function(s){
	var features_for_sample = _.map(features,function(x){return s[x]});
  // if (predict(model,s)){
  //   var
  // }

  if (predict(model, s) == "diaporthe-stem-canker")
  {
    var info = "<b>Diaporthe Stem Canker</b> <br> <br> <li> diatasi dengan efektif dengan mengkombinasikan tanaman yang resistant </li> <br> <li> mengurangi tanaman yang tumbuh dipermukaan </li> <br> <li> jika akan menanam kembali harus dicermati benihnya jangan sampai dari yang terjangkit stem canker </li> <br>";
  }
  else if (predict(model, s) == "charcoal-rot")
  {
    var info = "<b>Akar Busuk</b> <br> <br> <li>seringkali berhubungan dengan kekeringan</li> <br> <li>hindari pembenihan berlebihan agar kelembaban terjaga</li><br><li>menanam varietas yang cepat tumbuh</li>";
  }
  else if (predict(model, s) == "rhizoctonia-root-rot")
  {
    var info = "<b>Rhizoctonia Root Rot <b> <br> <br> <li> gunakan bibit berkualitas tinggi dengan praktek agronomi yang baik</li> <br> <li>hindari stres pada tanaman sebanyak mungkin</li><br><li>perawatan benih menggunakan fungisida strobilurin</li>";
  }
  else if (predict(model, s) == "phytophthora-rot")
  {
    var info = "<b>Phytophthora rot</b><br> <br> <li> gunakan fungisida </li><br> <li> meningkatkan drainase tanah </li>";
  }
  else if (predict(model, s) == "brown-stem-rot")
  {
    var info = "<b>Batang Coklat Busuk</b> <br> <br> <li>penanaman pada waktu yang optimal</li> <br> <li> menggunakan fungisida daun (foliar) </li> <br> <li> menjaga pH tanah stabil pada 7 </li>";
  }
  else if (predict(model, s) == "powdery-mildew")
  {
    var info = "<b>Jamur Bubuk</b> <br> <br> <li> gunakan fungisida </li> <br> <li> biasa terjadi pada kedelai yang terlambat ditanam </li>";
  }
  else if (predict(model, s) == "downy-mildew")
  {
    var info = "<b>Jamur Bulu Halus</b> <br> <br> <li> gunakan fungisida </li> <li> jangan menanam bibit dari lahan yang terinfeksi </li>";
  }
  else if (predict(model, s) == "brown-spot")
  {
    var info = "<b>Bercak Coklat</b><br><br> <li> akan hilang dengan sendirinya jika masih di awal musim </li> <br> <li>gunakan fungisida</li><br> <li> menyiangi gulma yang mungkin menjadi tempat berkembang jamur coklat </li>";
  }
  else if (predict(model, s) == "bacterial-blight")
  {
    var info = "<b>Kutu bakteri</b> <br> <br> <li> semprot tanaman dengan menggunakan campuran neem, jahe, bawang putih dan bawang merah </li> <br> <li>hindari penggunaan bibit yang terjangkit  </li>";
  }
  else if (predict(model, s) == "bacterial-pustule")
  {
    var info = "<b>Bisul Bakteri</b> <br> <br> <li> hindari penanaman ketika keadaan daun basah </li> <li> gunakan bibit yang tahan terhadap penyakit ini </li> <br> <li> lakukan penanaman bergilir  </li>";
  }
  else if (predict(model, s) == "purple-seed-stain")//11
  {
    var info = "<b>Purple Seed Strain (Noda Ungu pada Biji)<b><br><br><li>Disebut juga Chercospora Leaf Blight, disebabkan oleh pathogen fungi, <em>Cercospora kikuchii</em><br></li><li>Pengendalian dapat dilakuakan dengan rotasi tanaman dengan periode satu sampai dua tahun<br></li><li>Penggunaan fungsida, sehingga mengurangi infeksi fungsi<br></li>";
  }
  else if (predict(model, s) == "anthracnose")//12
  {
    var info = "<b>Anthracnose (Antraknosa)</b><br><br><li>Disebabkan oleh jamur <em>Colletotrichum truncatum</em><br></li><li>Mengetahui dan memilih varietas kedelai yang tahan dengan anthracnose<br></li><li>Rotasi lahan, untuk mengurangi daya tahan jamur tersebut<br></li><li>Penggunaan fungisida yang memiliki kemampuan mengendalikan fungi penyebab anthracnose</li>";
  }
  else if (predict(model, s) == "phyllosticta-leaf-spot")//13
  {
    var info = "<b>Phyllosticta Leaf Spot (Bintik Hitam Phyllosticta)</b><br><br><li>Disebabkan oleh fungi <em>Phylosticta sojicola</em></li><li>Melakukan rotasi tanam, karena fungi tersebut hanya hidup dan menyebar pada biji tanaman kedelai</li><li>Selain itu rotasi tanam juga untuk mengurangi tingkat ketahanan fungi penyebab penyakit tersebut</li>";
  }
   else if (predict(model, s) == "alternarialeaf-spot")//14
  {
    var info = "Alternarialeaf Spot (Bintik Alternarialeaf)<br><br><li>Disebabkan fungi <em>Alternaria spp.</em><br><br></li><li>Menanam benih dengan kualitas tinggi, bersertifikat dan tahan penyakit<br></li><li>Lakukan rotasi tanaman, agar mengurangi daya tahan fungi<br></li><li>Penggunaan fungisida pada tanaman dan lahan, untuk mencegah fungi penyakit Alternarialeaf Spot</li>";
  }
   else if (predict(model, s) == "frog-eye-leaf-spot")//15
  {
    var info = "<b>Bintik Mata Katak pada Daun</b><br><br><li>Disebabkan oleh fungi <em>Cercospora sojina</em><br><br></li><li>Penanggulangan dilakukan dengan penanaman benih bebas patogen dan tidak resistan<br></li><li>Lakukan rotasi tanaman dengan waktu paling tidak dua tahun untuk mengurangi resiko fungi penyebab <em>frog eye leaf spot</em></li><li>Penggunaan fungisida secara teratur, terutama yang terdapat tulisan menangani penyakit <em>frog eye leaf spot</em></li>";
  }
   else if (predict(model, s) == "diaporthe-pod-&-stem-blight")//16
  {
    var info = "<b>Diaporthe Pod and Stem Blight(Diaporthe Pod dan Hawar Batang)</b><br><br><li>Disebabkan oleh fungi <em>Diaporthe phaseolorum<br></em></li><li>Penanggulangan bisa dilakukan dengan rotasi tanaman kedelai tersebut dengan tanaman sejenis seperti gandum atau jagung<br></li><li>Gunakan benih berkualitas tinggi, yang anti dengan patogen</li><br><li>Penggunaan fungisida yang dapat menangani Pod and Stem Blight</li>";
  }
   else if (predict(model, s) == "cyst-nematode")//17
  {
    var info = "<b>Cyst Nematode</b> atau Soybean Cyst Nematode (SCN)<br><br><li>Disebabkan oleh nematoda <em>Heterodera glycines</em> yang menyerang akar kedelai<br></li><li>Cara menangani penyakit Cyst Nematode adalah dengan sanitasi, untuk memperlambat SCN menginfeksi lahan <br></li><li>Penggunaan benih yang tahan terhadap penyakit, untuk mengurangi kemungkinan terjadinya SCN<br></li><li>Penggunaan nematisida yang dapat menangani SCN</li>";
  }
   else if (predict(model, s) == "herbicide-injury")//18
  {
    var info = "<b>Herbicide Injury (Penyakit akibat herbisida)</b><br><br><li>Disebabkan oleh penggunaan herbisida yang merupakan bahan kimia dengan tujuan membasmi tanaman gulma, tetapi karena bahan kimia tersebut. Tanaman kedelai yang bukan merupakan target herbisida, malah terkena efek herbisida<br></li><li>Cara menanganinya adalah dengan mengurangi dosis herbisida</li>";
  }
  else if (predict(model, s) == "2-4-d-injury")//19
  {
    var info = "<b>2-4-d Injury (Penyakit 2-4-d)</b><br><br><li>Disebabkan oleh penggunaan herbisida yang merupakan bahan kimia dengan tujuan membasmi tanaman gulma, tetapi karena bahan kimia tersebut. Tanaman kedelai yang bukan merupakan target herbisida, malah terkena efek herbisida<br></li><li>Cara menanganinya adalah dengan mengurangi dosis 2,4-d tersebut</li>";
  }

  // swal(predict(model, s) , aaa, "success");
  swal({   title: 'Penyakit : '+"<span style='color:#1abc9c'>"+predict(model, s)+"</span>",   text: "<b>Cara Penanganan</b> : <br><br>"+info,  html: true, type: "success", confirmButtonColor: "#1abc9c",   confirmButtonText: "OK",   closeOnConfirm: false }, function(){   location.replace("index.php");});
	//  sweetAlert(predict(model,s));
  })
}