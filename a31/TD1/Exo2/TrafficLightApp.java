package cars.Exo2;

public class TrafficLightApp {
    public static void main(String[] args) {
        TrafficLight feu;
        feu = new TrafficLight();
        System.out.println(feu);
        feu.onOff();
        System.out.println(feu);
        for (int i = 0; i < 5; i++){
            feu.switchColor();
            System.out.println(feu);
        }

        feu.setSwitchColorStrategy(new SwitchGermany(feu.getColor()));

        for (int i = 0; i < 5; i++){
            feu.switchColor();
            System.out.println(feu);
        }
    }
}