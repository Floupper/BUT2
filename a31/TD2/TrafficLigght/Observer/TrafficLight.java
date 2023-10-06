package TrafficLigght.Observer;

import java.util.ArrayList;

public class TrafficLight {
    private boolean isOn;
    private LightColor color;
    private SwitchColorStrategy switchColorStrategy;
    private ArrayList<TrafficLightObersver> _observers = new ArrayList<>();

    public TrafficLight(){
        switchColorStrategy = new SwitchFrance();
    }

    public boolean isOn() {
        return isOn;
    }

    public LightColor getColor() {
        return color;
    }

    public void onOff() {
        isOn = !isOn;
        color = LightColor.RED;
        notifySwitchState();
    }

    public void switchColor() {
        color = switchColorStrategy.switchColor(color);
        notifySwitchColor();
    }

    public void setSwitchColorStrategy(SwitchColorStrategy switchColorStrategy) {
        this.switchColorStrategy = switchColorStrategy;
    }

    public void addObserver(TrafficLightObersver trafficLight){
        _observers.add(trafficLight);
    }

    private void notifySwitchColor(){
        for (TrafficLightObersver trafficLight : _observers) {
            trafficLight.updateColor(this);
        }
    }
    private void notifySwitchState(){
        for (TrafficLightObersver trafficLight : _observers) {
            trafficLight.updateState(this);
        }
    }

    @Override
    public String toString() {
        return "TrafficLight{" +
                "isOn=" + isOn +
                ", color=" + color +
                ", switchColorStrategy=" + switchColorStrategy +
                '}';
    }
}
