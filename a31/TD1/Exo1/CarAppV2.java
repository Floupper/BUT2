package cars.Exo1;

public class CarAppV2 {
    public static void main(String[] args) {
        CarFactory factory = new CarFactory();

        switch (args[0]){
            case "Subaru": Car subaru = factory.createSubaru();
                            System.out.println( "Plein de la Subaru effectué." );
                            System.out.println( subaru.honk() + " !" );
                            System.out.println( subaru.speedUp() + " !" );
            case "Jeep": Car jeep = factory.createJeep();
                        System.out.println( "Plein de la Jeep effectué." );
                        System.out.println( jeep.honk() + " !" );
                        System.out.println( jeep.speedUp() + " !" );
            case "FiatMultipla": Car fiat = factory.createJeep();
                                System.out.println( "Plein de la Fiat Multipla effectué." );
                                System.out.println( fiat.honk() + " !" );
                                System.out.println( fiat.speedUp() + " !" );
        }
    }
}
