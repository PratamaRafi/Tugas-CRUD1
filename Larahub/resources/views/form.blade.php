<div>
    <h2>Buat Account Baru!</h2>
        <form action="/welcome" method="POST">
            @csrf
            <div>
                <label>First Name:</label>
                <input type="text" name="first_name">
            </div>
            <br>
            <div>
                <label>Last Name:</label>
                <input type="text" name="last_name">
            </div>
            <br>
            <div>
                <label>Gender:</label><br>
                <input type="radio" name="gender" value="male">Male<br>
                <input type="radio" name="gender" value="female">Female<br>
                <input type="radio" name="gender" value="other">Other
            </div>
            <br>
            <div>
                <label>Nationality:</label><br>
                <p>
                    <select>
                        <option value="indonesian">Indonesian</option>
                        <option value="congo">Congo</option>
                        <option value="brazil">Brazil</option>
                    </select>
                </p>
            </div>
            <div>
                <p>Language Spoken:</p>
                <input type="checkbox" name="language" value="indonesia">
                <label>Bahasa Indonesia</label><br>

                <input type="checkbox" name="language" value="english">
                <label>English</label><br>
                
                <input type="checkbox" name="language" value="other">
                <label>Other</label><br>
            </div>
            <br>
            <div>
                <label>Bio:</label><br>
                <textarea name="bio"></textarea>
            </div>
            <div>
                <input type="submit" value="Sign Up"/>
            </div>
        </form>
</div>