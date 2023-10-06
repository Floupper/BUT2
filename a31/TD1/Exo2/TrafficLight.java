package cars.Exo2;

public class TrafficLight {
    private boolean isOn;
    private LightColor color;
    private SwitchColorStrategy switchColorStrategy;

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
    }

    public void switchColor() {
        color = switchColorStrategy.switchColor(color);
    }

    public void setSwitchColorStrategy(SwitchColorStrategy switchColorStrategy) {
        this.switchColorStrategy = switchColorStrategy;
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
