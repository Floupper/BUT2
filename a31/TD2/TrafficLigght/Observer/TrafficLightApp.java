package TrafficLigght.Observer;

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

        TrafficLightObersver trafficLightObersver = new LightObserver();
        feu.addObserver(trafficLightObersver);

        for (int i = 0; i < 5; i++){
            feu.switchColor();
        }
    }
}