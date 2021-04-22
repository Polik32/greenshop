fetch('https://api.openweathermap.org/data/2.5/find?lat=49.23356117791384&lon=28.47638072410789&units=metric&cnt=1&appid=9375fda6b48b4c80735a829228891582')

.then(response => response.json()) // преобразуем ответ в json

.then(data => {
	
  let weather = data;
	if (weather.list[0].rain === !null){
		function random(min, max) {
		var rand = min + Math.random() * (max + 1 - min);
		rand = Math.floor(rand);
		return rand;
	}
	for (var i=0; i<200; i++) {
		document.getElementsByTagName('body')[0].innerHTML += '<i class="rain" style="left: '+random(-2000, 2000)+'px;transform: translate3d(0, 0, 0);animation-delay: '+(0.01 * i)+'s"></i>';
	}
	
	$('.logo-about-us-primary').addClass('logo-about-us-primary-night');
		
	$('.sun').removeClass('sun-active');
	
	$('.moon').removeClass('moon-active');
}
  console.log(weather) // выводим в консоль результат выполнения response.json()
})

.catch(error => console.error(error))

/*49.23356117791384, 28.47638072410789*/

/*15.369220942148925, 100.76204340496544
 
-6.482615036603655, -52.00660783434664
 * */



let today = new Date();

if (today.getHours() >= 19 || today.getHours() <= 5){
	
	$('.logo-about-us-primary').addClass('logo-about-us-primary-night');
	
	$('.moon').addClass('moon-active');
	
	$('.path-one-info-greenway').addClass('night');
	
	console.log(today.getHours());
}
	else {
		
	$('.logo-about-us-primary').addClass('logo-about-us-primary-night');
	
	$('.sun').addClass('sun-active');
	
	$('.path-one-info-greenway').addClass('day');
	
	console.log(today.getHours())
}