-- Drop the database if it exists and then create it.
DROP DATABASE IF EXISTS student3pm_airport_db;
-- Create database
CREATE DATABASE student3pm_airport_db;
USE student3pm_airport_db;

-- Create flights table
CREATE TABLE flights (
    id INT PRIMARY KEY AUTO_INCREMENT,
    flight_number VARCHAR(10) NOT NULL,
    airline VARCHAR(50) NOT NULL,
    status ENUM('arriving', 'departing') NOT NULL,
    scheduled_time DATETIME NOT NULL,
    origin VARCHAR(50),
    destination VARCHAR(50),
    terminal VARCHAR(2) NOT NULL,
    gate VARCHAR(3) NOT NULL
);

-- Insert sample data
INSERT INTO flights (flight_number, airline, status, scheduled_time, origin, destination, terminal, gate) VALUES
-- Arriving flights (origin filled, destination is our airport)
('AA123', 'American Airlines', 'arriving', '2025-02-05 10:30:00', 'New York (JFK)', NULL, 'A', 'A12'),
('UA456', 'United Airlines', 'arriving', '2025-02-05 11:15:00', 'Chicago (ORD)', NULL, 'B', 'B05'),
('DL789', 'Delta Airlines', 'arriving', '2025-02-05 12:45:00', 'Atlanta (ATL)', NULL, 'A', 'A15'),
('SW234', 'Southwest Airlines', 'arriving', '2025-02-05 14:20:00', 'Las Vegas (LAS)', NULL, 'B', 'B08'),
('JB567', 'JetBlue', 'arriving', '2025-02-05 15:45:00', 'Boston (BOS)', NULL, 'A', 'A07'),

-- Departing flights (destination filled, origin is our airport)
('AA789', 'American Airlines', 'departing', '2025-02-05 11:30:00', NULL, 'Miami (MIA)', 'C', 'C14'),
('UA321', 'United Airlines', 'departing', '2025-02-05 13:00:00', NULL, 'San Francisco (SFO)', 'D', 'D03'),
('DL654', 'Delta Airlines', 'departing', '2025-02-05 14:45:00', NULL, 'Seattle (SEA)', 'C', 'C09'),
('SW987', 'Southwest Airlines', 'departing', '2025-02-05 16:20:00', NULL, 'Denver (DEN)', 'D', 'D11'),
('JB432', 'JetBlue', 'departing', '2025-02-05 17:45:00', NULL, 'Los Angeles (LAX)', 'C', 'C16');