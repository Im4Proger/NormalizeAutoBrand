<?php
/**
 * PHP-class for determine the brand name of the car
 * @author https://github.com/Im4Proger
 */

namespace Im4Proger\NormalizeAutoBrand;

class NormalizeAutoBrand
{
	private string $text = '';
	private array $brand_array = array ('Audi','BMW','Ford','Honda','Hyundai','Kia','Lada','ВАЗ','Mazda','Mercedes-Benz','Mitsubishi','Nissan','Renault','Skoda','Toyota','Volkswagen','Acura','Daihatsu','Datsun','Honda','Infiniti','Isuzu','Lexus','Mazda','Mitsubishi','Nissan','Scion','Subaru','Suzuki','Toyota','Buick','Cadillac','Chevrolet','Chrysler','Dodge','Ford','GMC','Hummer','Jeep','Lincoln','Mercury','Oldsmobile','Pontiac','Tesla','Aurus','Lada','ВАЗ','ГАЗ','Москвич','ТагАЗ','УАЗ','Audi','BMW','Mercedes-Benz','Opel','Porsche','Volkswagen','Daewoo','Genesis','Hyundai','Kia','SsangYong','Alfa Romeo','Aston Martin','Bentley','Bugatti','Citroen','DS','Ferrari','Fiat','Jaguar','Lamborghini','Lancia','Land Rover','Maserati','Maybach','Mini','Peugeot','Ravon','Renault','Rolls-Royce','Rover','Saab','SEAT','Skoda','Smart','Volvo','ZAZ','Brilliance','BYD','Changan','Chery','CheryExeed','DongFeng','FAW','Foton','GAC','Geely','Great Wall','Haima','Haval','JAC','Lifan','Luxgen','Zotye');
	public string $brand_search = '';

	public function __construct(string $text)
	{
		$this->text = $text;
		$this->getBrand();
	}

	//determine the brand name of the car
	private function getBrand()
	{
		foreach ($this->brand_array as $brand_item)
		{
			if (str_contains($this->text,$brand_item))
			{
				$this->brand_search = $brand_item;
			}
		}
	}
}
?>