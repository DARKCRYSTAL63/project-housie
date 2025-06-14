<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Housie - Play Tambola Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Background section -->
    <div class="background-section">
        <h1>Online Housie</h1>
        <p>Experience the thrill of traditional Tambola with modern convenience. Book tickets for your favorite time slots and win exciting cash prizes!</p>
        <div class="live-draw">
            <i class="fas fa-broadcast-tower"></i> Live Draw in Progress for 7:00 PM
        </div>
    </div>
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">
            <i class="fas fa-dice"></i>
            <h1>Online Housie</h1>
        </div>
        <div class="nav-links">
            <a href="mytickets.html"><i class="fas fa-ticket-alt"></i> MyTickets</a>
            <a href="mybalance.html"><i class="fas fa-wallet"></i> MyBalance</a>
           <?php if (isset($_SESSION['username'])): ?>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        <?php else: ?>
            <a href="login.php"><i class="fas fa-user"></i> Login</a>
        <?php endif; ?>
        </div>
        <button class="hamburger">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Time Slots -->
        <div class="time-slots">
            <!-- 5 PM Slot -->
            <div class="slot-card">
                <div class="slot-header">
                    <div class="slot-time">5:00 PM</div>
                    <div class="slot-tickets">28/40 Booked</div>
                </div>
                <div class="slot-prizes">
                    <h4><i class="fas fa-trophy"></i> Prize Structure</h4>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Full House: <strong>₹1000</strong></li>
                        <li><i class="fas fa-check-circle"></i> Top Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Middle Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Bottom Line: <strong>₹200</strong></li>
                    </ul>
                </div>
                <div class="slot-price">Ticket Price: <span>₹50</span></div>
                <div class="slot-actions">
                    <button class="btn btn-primary" onclick="openModal('5pm')">
                        <i class="fas fa-eye"></i> View Tickets
                    </button>
                    <button class="btn btn-secondary">
                        <i class="fas fa-shopping-cart"></i> Book Now
                    </button>
                </div>
            </div>

            <!-- 6 PM Slot -->
            <div class="slot-card">
                <div class="slot-header">
                    <div class="slot-time">6:00 PM</div>
                    <div class="slot-tickets">15/40 Booked</div>
                </div>
                <div class="slot-prizes">
                    <h4><i class="fas fa-trophy"></i> Prize Structure</h4>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Full House: <strong>₹1000</strong></li>
                        <li><i class="fas fa-check-circle"></i> Top Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Middle Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Bottom Line: <strong>₹200</strong></li>
                    </ul>
                </div>
                <div class="slot-price">Ticket Price: <span>₹50</span></div>
                <div class="slot-actions">
                    <button class="btn btn-primary" onclick="openModal('6pm')">
                        <i class="fas fa-eye"></i> View Tickets
                    </button>
                    <button class="btn btn-secondary">
                        <i class="fas fa-shopping-cart"></i> Book Now
                    </button>
                </div>
            </div>

            <!-- 7 PM Slot -->
            <div class="slot-card">
                <div class="slot-header">
                    <div class="slot-time">7:00 PM</div>
                    <div class="slot-tickets">32/40 Booked</div>
                </div>
                <div class="slot-prizes">
                    <h4><i class="fas fa-trophy"></i> Prize Structure</h4>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Full House: <strong>₹1000</strong></li>
                        <li><i class="fas fa-check-circle"></i> Top Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Middle Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Bottom Line: <strong>₹200</strong></li>
                    </ul>
                </div>
                <div class="slot-price">Ticket Price: <span>₹50</span></div>
                <div class="slot-actions">
                    <button class="btn btn-primary" onclick="openModal('7pm')">
                        <i class="fas fa-eye"></i> View Tickets
                    </button>
                    <button class="btn btn-secondary">
                        <i class="fas fa-shopping-cart"></i> Book Now
                    </button>
                </div>
            </div>

            <!-- 8 PM Slot -->
            <div class="slot-card">
                <div class="slot-header">
                    <div class="slot-time">8:00 PM</div>
                    <div class="slot-tickets">12/40 Booked</div>
                </div>
                <div class="slot-prizes">
                    <h4><i class="fas fa-trophy"></i> Prize Structure</h4>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Full House: <strong>₹1000</strong></li>
                        <li><i class="fas fa-check-circle"></i> Top Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Middle Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Bottom Line: <strong>₹200</strong></li>
                    </ul>
                </div>
                <div class="slot-price">Ticket Price: <span>₹50</span></div>
                <div class="slot-actions">
                    <button class="btn btn-primary" onclick="openModal('8pm')">
                        <i class="fas fa-eye"></i> View Tickets
                    </button>
                    <button class="btn btn-secondary">
                        <i class="fas fa-shopping-cart"></i> Book Now
                    </button>
                </div>
            </div>

            <!-- 9 PM Slot -->
            <div class="slot-card">
                <div class="slot-header">
                    <div class="slot-time">9:00 PM</div>
                    <div class="slot-tickets">40/40 Booked</div>
                </div>
                <div class="slot-prizes">
                    <h4><i class="fas fa-trophy"></i> Prize Structure</h4>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Full House: <strong>₹1000</strong></li>
                        <li><i class="fas fa-check-circle"></i> Top Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Middle Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Bottom Line: <strong>₹200</strong></li>
                    </ul>
                </div>
                <div class="slot-price">Ticket Price: <span>₹50</span></div>
                <div class="slot-actions">
                    <button class="btn btn-primary" onclick="openModal('9pm')">
                        <i class="fas fa-eye"></i> View Tickets
                    </button>
                    <button class="btn btn-secondary" disabled>
                        <i class="fas fa-times-circle"></i> Sold Out
                    </button>
                </div>
            </div>

            <!-- 10 PM Slot -->
            <div class="slot-card">
                <div class="slot-header">
                    <div class="slot-time">10:00 PM</div>
                    <div class="slot-tickets">5/40 Booked</div>
                </div>
                <div class="slot-prizes">
                    <h4><i class="fas fa-trophy"></i> Prize Structure</h4>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Full House: <strong>₹1000</strong></li>
                        <li><i class="fas fa-check-circle"></i> Top Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Middle Line: <strong>₹200</strong></li>
                        <li><i class="fas fa-check-circle"></i> Bottom Line: <strong>₹200</strong></li>
                    </ul>
                </div>
                <div class="slot-price">Ticket Price: <span>₹50</span></div>
                <div class="slot-actions">
                    <button class="btn btn-primary" onclick="openModal('10pm')">
                        <i class="fas fa-eye"></i> View Tickets
                    </button>
                    <button class="btn btn-secondary">
                        <i class="fas fa-shopping-cart"></i> Book Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Live Draw Section -->
        <div class="live-draw-section">
            <div class="live-draw-header">
                <h2><i class="fas fa-broadcast-tower"></i> Live Draw - 7:00 PM</h2>
                <div class="timer">Next number in: <span id="countdown">10</span>s</div>
            </div>
            
            <div class="called-numbers">
                <div class="called-number">15</div>
                <div class="called-number">28</div>
                <div class="called-number">42</div>
                <div class="called-number">7</div>
                <div class="called-number">33</div>
                <div class="called-number">56</div>
                <div class="called-number">19</div>
                <div class="called-number">63</div>
            </div>
            
            <h3>Your Tickets:</h3>
            <div class="live-tickets">
                <div class="ticket-preview">
                    <div class="ticket-header">Ticket #7</div>
                    <div class="scrollable-ticket">
                        <div class="ticket-grid">
                            <!-- Row 1 -->
                            <div class="ticket-cell has-number">3</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">15</div>
                            <div class="ticket-cell has-number called">28</div>
                            <div class="ticket-cell has-number">35</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">56</div>
                            <div class="ticket-cell has-number">63</div>
                            <div class="ticket-cell"></div>
                            
                            <!-- Row 2 -->
                            <div class="ticket-cell has-number">7</div>
                            <div class="ticket-cell has-number called">19</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">33</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">44</div>
                            <div class="ticket-cell has-number called">42</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">71</div>
                            
                            <!-- Row 3 -->
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">24</div>
                            <div class="ticket-cell has-number">36</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">58</div>
                            <div class="ticket-cell has-number">67</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">77</div>
                            <div class="ticket-cell has-number">82</div>
                        </div>
                    </div>
                    <div class="ticket-footer">Current matches: 5</div>
                </div>
                
                <div class="ticket-preview">
                    <div class="ticket-header">Ticket #12</div>
                    <div class="scrollable-ticket">
                        <div class="ticket-grid">
                            <!-- Row 1 -->
                            <div class="ticket-cell has-number">5</div>
                            <div class="ticket-cell has-number called">15</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">27</div>
                            <div class="ticket-cell has-number called">33</div>
                            <div class="ticket-cell has-number">45</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number called">56</div>
                            <div class="ticket-cell"></div>
                            
                            <!-- Row 2 -->
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number called">19</div>
                            <div class="ticket-cell has-number">31</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number called">42</div>
                            <div class="ticket-cell has-number">51</div>
                            <div class="ticket-cell has-number">62</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">74</div>
                            
                            <!-- Row 3 -->
                            <div class="ticket-cell has-number called">7</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">39</div>
                            <div class="ticket-cell has-number">47</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number called">28</div>
                            <div class="ticket-cell has-number">69</div>
                            <div class="ticket-cell"></div>
                            <div class="ticket-cell has-number">88</div>
                        </div>
                    </div>
                    <div class="ticket-footer">Current matches: 7</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ticket Selection Modal -->
    <div class="modal" id="ticketModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Select Tickets for <span id="modalTime">5:00 PM</span></h3>
                <button class="close-modal" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <p>Available tickets: <span id="availableTickets">32</span>/40</p>
                <div class="ticket-grid-container" id="ticketGrid">
                    <!-- Tickets will be generated here -->
                </div>
                
                <div class="ticket-preview">
                    <div class="ticket-header">Ticket Preview: <span id="previewTicket">#1</span></div>
                    <div class="scrollable-ticket">
                        <div class="ticket-grid" id="previewGrid">
                            <!-- Preview numbers will be generated here -->
                        </div>
                    </div>
                    <div class="ticket-footer">Select tickets to book from the options above</div>
                </div>
                
                <div class="modal-actions">
                    <button class="btn btn-secondary" onclick="closeModal()">
                        <i class="fas fa-times"></i> Cancel
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-shopping-cart"></i> Book Selected Tickets
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Hamburger menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    // Check login state and update the nav link
    const authLink = document.getElementById('auth-link');

    function updateAuthLink() {
        if (localStorage.getItem('loggedIn') === 'true') {
            authLink.innerHTML = '<i class="fas fa-sign-out-alt"></i> Logout';
            authLink.onclick = function(e) {
                e.preventDefault();
                localStorage.removeItem('loggedIn');
                window.location.href = 'login.html';
            };
        } else {
            authLink.innerHTML = '<i class="fas fa-user"></i> Login';
            authLink.setAttribute('href', 'login.html');
            authLink.onclick = null;
        }
    }

    updateAuthLink();
        // Modal functions
        function openModal(time) {
            document.getElementById('modalTime').textContent = time;
            generateTickets();
            document.getElementById('ticketModal').style.display = 'flex';
        }
        
        function closeModal() {
            document.getElementById('ticketModal').style.display = 'none';
        }
        
        // Generate tickets for the modal
        function generateTickets() {
            const grid = document.getElementById('ticketGrid');
            grid.innerHTML = '';
            
            // Create 40 ticket options
            for (let i = 1; i <= 40; i++) {
                const ticket = document.createElement('div');
                ticket.classList.add('ticket-option');
                
                // Randomly mark some as booked (for demo)
                const isBooked = Math.random() > 0.7;
                if (isBooked) {
                    ticket.classList.add('booked');
                }
                
                ticket.innerHTML = `
                    <div class="ticket-number">Ticket #${i}</div>
                    <div class="ticket-status">${isBooked ? 'Booked' : 'Available'}</div>
                `;
                
                if (!isBooked) {
                    ticket.addEventListener('click', () => {
                        ticket.classList.toggle('selected');
                        generateTicketPreview(i);
                    });
                }
                
                grid.appendChild(ticket);
            }
            
            // Generate initial preview
            generateTicketPreview(1);
        }
        
        // Generate a random housie ticket for preview
        function generateTicketPreview(ticketNumber) {
            const grid = document.getElementById('previewGrid');
            grid.innerHTML = '';
            document.getElementById('previewTicket').textContent = `#${ticketNumber}`;
            
            // Create a 3x9 grid with random numbers
            for (let row = 0; row < 3; row++) {
                for (let col = 0; col < 9; col++) {
                    const min = col * 10 + 1;
                    const max = (col + 1) * 10;
                    
                    // Decide if this cell should have a number (each row has 5 numbers)
                    const hasNumber = Math.random() > 0.44;
                    
                    const cell = document.createElement('div');
                    cell.classList.add('ticket-cell');
                    
                    if (hasNumber) {
                        const num = Math.floor(Math.random() * (max - min + 1)) + min;
                        cell.textContent = num;
                        cell.classList.add('has-number');
                        
                        // Randomly mark some as called (for demo)
                        if (Math.random() > 0.8) {
                            cell.classList.add('called');
                        }
                    }
                    
                    grid.appendChild(cell);
                }
            }
        }
        
        // Countdown timer for live draw
        let countdown = 10;
        const countdownElement = document.getElementById('countdown');
        
        function updateCountdown() {
            countdown--;
            if (countdown < 0) {
                countdown = 10;
                // Simulate calling a new number
                const calledNumbers = document.querySelector('.called-numbers');
                const newNumber = Math.floor(Math.random() * 90) + 1;
                
                const numberElement = document.createElement('div');
                numberElement.classList.add('called-number');
                numberElement.textContent = newNumber;
                
                calledNumbers.appendChild(numberElement);
                
                // Highlight new number on tickets
                highlightNumber(newNumber);
            }
            countdownElement.textContent = countdown;
        }
        
        // Highlight the called number on tickets
        function highlightNumber(number) {
            const allCells = document.querySelectorAll('.ticket-cell.has-number');
            allCells.forEach(cell => {
                if (parseInt(cell.textContent) === number) {
                    cell.classList.add('called');
                }
            });
        }
        
        // Initialize
        window.onload = function() {
            // Generate initial preview for 5pm
            generateTickets();
            
            // Start countdown timer
            setInterval(updateCountdown, 1000);
        };
        
        // Close modal if clicked outside
        window.onclick = function(event) {
            const modal = document.getElementById('ticketModal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>