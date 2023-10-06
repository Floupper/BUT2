package TrafficLigght.Observer;

public class SwitchBimode implements SwitchColorStrategy {
    public LightColor switchColor(LightColor color){
        switch (color){
            case GREEN:
                return LightColor.RED;
            case ORANGE:
                return LightColor.RED;
            case RED:
                return LightColor.GREEN;
            default:
                return color;
        }
    }
}
