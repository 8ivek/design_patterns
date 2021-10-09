public class Song implements IComponent {
    public String songName;
    public String artist;
    public float speed = 1; // Default playback speed

    public Song(String songName, String artist) {
        this.songName = songName;
        this.artist = artist;
    }

    public String getArtist() {
        return this.artist;
    }

    @Override
    public void play() {
        // play song
        System.out.println(
                "Playing song: " + this.getName() + "by artist" + this.getArtist() + " in speed: " + this.speed);
    }

    @Override
    public void setPlaybackSpeed(float speed) {
        this.speed = speed;
    }

    @Override
    public String getName() {
        return this.songName;
    }
}
