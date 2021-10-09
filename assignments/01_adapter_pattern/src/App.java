public class App {
    public static void main(String[] args) throws Exception {
        OldCoffeeMachine ovm = new OldCoffeeMachine();
        CoffeeTouchscreenAdapter touchscreen = new CoffeeTouchscreenAdapter(ovm);
        touchscreen.chooseFirstSelection();
        touchscreen.chooseSecondSelection();
    }
}
