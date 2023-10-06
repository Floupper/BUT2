package cars.Exo1;

public class CarApp {

	public static void main(String[] args) {

		Car subaru = new Subaru();
		System.out.println("Subaru créée.");
		subaru.refuel();
		System.out.println("Plein de la Subaru effectué.");
		System.out.println(subaru.honk() + " !");
		System.out.println(subaru.speedUp() + " !");

		Car jeep = new Jeep();
		System.out.println("Jeep créée.");
		jeep.refuel();
		System.out.println("Plein de la Jeep effectué.");
		System.out.println(jeep.honk() + " !");
		System.out.println(jeep.speedUp() + " !");

		Car multipla = new FiatMultipla();
		System.out.println("Fiat Multipla créée.");
		multipla.refuel();
		System.out.println("Plein de la Fiat Multipla effectué.");
		System.out.println(multipla.honk() + " !");
		System.out.println(multipla.speedUp() + " !");

	}

}
