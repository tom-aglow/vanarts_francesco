<div class="col-1 block">
    <h1>Make a reservation</h1>

    <form action="/" class="book-form" name="book-form" method="post">
        <!--table type-->
        <div class="row">
            <input type="radio" id="main-hall" name="room" value="main" tabindex="1" checked><label for="main-hall">Main hall</label>
            <input type="radio" id="private-room" name="room" value="private" tabindex="2"><label for="private-room">Private room</label>
        </div>

        <!--date & time-->
        <label for="date">Date & time</label>
        <div class="row">
            <input type="text" id="date" name="date" placeholder="select the date" tabindex="3" required>
            <select name="time" id="time" tabindex="4" required>
                <option value="" disabled selected hidden>Time</option>
                <option value="05:00">05:00 PM</option>
                <option value="06:00">06:00 PM</option>
                <option value="07:00">07:00 PM</option>
                <option value="08:00">08:00 PM</option>
                <option value="09:00">09:00 PM</option>
                <option value="10:00">10:00 PM</option>
            </select>
        </div>


        <!--number of guests-->
        <label for="guests">Number of guests</label>
        <select name="guests" id="guests" tabindex="5" required>
            <option value="1">1 person</option>
            <option value="2" selected>2 persons</option>
            <option value="3">3 persons</option>
            <option value="4">4 persons</option>
        </select>

        <!--contact data-->
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" tabindex="6" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" tabindex="7" required>

        <label for="phone">Phone number</label>
        <input type="tel" id="phone" name="phone" placeholder="(555)123-45-67" tabindex="8" required>

        <!--comment area-->
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" cols="30" rows="4" placeholder="Enter any comment to your booking" tabindex="9"></textarea>

        <!--submit button-->
        <input type="submit" class="btn btn-md btn-primary" name="submit" value="Reserve now" tabindex="10">
    </form>
</div>
