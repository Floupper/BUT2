package TrafficLigght.Observer;

public class LightObserver implements TrafficLightObersver {
    public LightObserver(){

    }

    public void updateColor(TrafficLight trafficLight){
        System.out.println("Le feu passe au " + trafficLight.getColor().toString());
    }

    public void updateState(TrafficLight trafficLight){
        System.out.println("Le feu est " + trafficLight.isOn());
    }
}
