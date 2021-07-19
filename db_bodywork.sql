--
-- Table structure for table `students`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `username`, `gender`, `height`, `weight`) VALUES
(1, 'Loly', 'Grande', 'lolyg@gmail.com', '5EB319F2B34565D65F4DB735DE522575', 'lolyg', 'Female', '165', '47');

--
-- Indexes for dumped tables
--

-- Indexes for table `students`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

